<?php

/**
 * Plugin Name: HOWPCP_AI_Post_Gen
 * Description: 連結 OpenAI API，允許使用者輸入文字，並顯示 ChatGPT 回應。
 * Version: 1.0
 * Author: Your Name
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
        'HOWPCP_AI_Post_Gen Settings',
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
        <h2>HOWPCP_AI_Post_Gen Settings</h2>
        <form method="post" action="">
            <label for="user_input"> 輸入文字 :</label>
            <textarea name="user_input" id="user_input" rows="4" class="form-control"></textarea>
            <br>
            <input type="submit" class="btn btn-primary" value=" 生成回應 ">
        </form>
        <hr>
        <h3>ChatGPT 回應 :</h3>
        <div id="chatgpt_response" class="alert alert-info">
            <?php echo get_chatgpt_response(); ?></div>
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
            // 'prompt' => $user_input,
            'max_tokens' => 500,
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
            return 'Error connecting to ChatGPT: ' . curl_error($ch);
        }
        curl_close($ch);
        $decoded_response = json_decode($response, true);
        if (isset($decoded_response['choices'][0]['message']['content'])) {
            return
                esc_html($decoded_response['choices'][0]['message']['content']);
        } else {
            return 'Error retrieving ChatGPT response.' . $decoded_response;
        }
    }
    return ''; // 如果沒有用戶輸入，回傳空字串
}
