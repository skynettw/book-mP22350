<?php
$x = 10;
echo "$x!=";
$factorial = $x;
while ($x > 1) {
    $factorial = $factorial * (--$x);
}
echo $factorial;
?>