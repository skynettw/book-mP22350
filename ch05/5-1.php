<!-- 5-1.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
</head>

<body>
    <h2> 以下是使用 PHP 產生的資料 </h2>
    <hr>
    <?php
    for ($i = 1; $i < 6; $i++) {
        echo "<h" . $i . "> 這是第 " . $i . " 行 </h" . ">";
    }
    ?>
    <hr>
    <em> 站長的練功秘笈 5-1.php</em>
</body>

</html>