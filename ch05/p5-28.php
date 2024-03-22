<?php
function factorial($n)
{
    $fac = $n;
    while ($n > 1) {
        $fac = $fac * (--$n);
    }
    return $fac;
}
for ($x = 1; $x <= 20; $x++)
    echo "$x!=" . factorial($x) . "\n";
?>