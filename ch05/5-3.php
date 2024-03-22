<!-- 5-3.php -->
<!DCOTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <title> 九九乘法表 </title>
    </head>

    <body>
        <h2> 九九乘法表 </h2>
        <table>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 9; $j++)
                    echo "<td align=right>" . $i * $j . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>

    </html>