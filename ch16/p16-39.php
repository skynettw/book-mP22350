<?php

/**
 * Plugin Name: HOWPCP AI Post Generator
 * Description: 連結 OpenAI API，允許使用者輸入文字，並顯示 ChatGPT 回應。
 * Version: 1.0
 * Author: Richard Ho
 */
// 加入 Bootstrap 的 CDN
function howpcp_add_bootstrap_cdn()
{
    echo '<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">';
}
add_action('wp_head', 'howpcp_add_bootstrap_cdn');
// 加入外掛設定頁面
function howpcp_plugin_menu()
{
    add_menu_page(
        'AI Post Generator',
        'AI Post Generator',
        'manage_options',
        'howpcp-settings',
        'howpcp_settings_page'
    );
}
add_action('admin_menu', 'howpcp_plugin_menu');
// 外掛設定頁面的 HTML
function howpcp_settings_page()
{
?>
    <div class="wrap">
        <h2>HOWPCP AI Post Generator</h2>
        <form method="post" action="">
            <label for="user_input"> 對於文章內容的描述 :</label>
            <textarea name="user_input" id="user_input" rows="4" class="form-control"></textarea>
            <br>
            <input type="submit" class="btn btn-primary" value=" 建立貼文 ">
        </form>
        <?php
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'POST') {
            echo "<h3>ChatGPT 回應訊息 :</h3>";
            $post_content = get_chatgpt_response();
            if ($post_content != "") {
                // 建立一個貼文草稿
                $post = array(
                    'post_title' => ' 我的貼文 ',
                    'post_content' => $post_content,
                    'post_status' => 'draft',
                );
                $post_id = wp_insert_post($post);
                $post_url = get_edit_post_link($post_id);
                echo "<a class='btn btn-warning' href='" .
                    $post_url . "'> 前往編輯貼文 </a><br>";
                echo "<div id='chatgpt_response' class='alert alert-info'>";
                echo $post_content;
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger'> 無法取得資訊 </div>";
            }
        }
        ?>
    </div>
<?php
}
// 取得 ChatGPT 回應
function get_chatgpt_response()
{
    if (isset($_POST['user_input'])) {
        $user_input = sanitize_text_field($_POST['user_input']);
        // 使用 OpenAI API，請替換 YOUR_OPENAI_API_KEY 為實際的 API 金鑰
        $api_key = '****';
        $api_url = 'https://api.openai.com/v1/chat/completions';
        // Define messages
        $messages = array();
        $message = array();
        $message["role"] = "user";
        $message["content"] = $user_input;
        $messages[] = $message;
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $api_key,
        );
        $data = array(
            'max_tokens' => 1000,
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        );
        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error connecting to ChatGPT: ' . curl_error($ch);
        }
        curl_close($ch);
        $decoded_response = json_decode($response, true);
        if (isset($decoded_response['choices'][0]['message']['content'])) {
            return
                esc_html($decoded_response['choices'][0]['message']['content']);
        } else {
            echo 'Error retrieving ChatGPT response.' . $decoded_response;
        }
    }
    return ''; // 如果有任何錯誤均傳回空字串
}
