<?php
$cars = array(
    'Toyota' => array('Wish', 'Altis', 'Camry', 'Yaris', '86'),
    'Lexus' => array('IS', 'ES', 'LS', 'GS'),
    'Mazda' => array('Mazda 2', 'Mazda 5', 'CX-3', 'CX-5')
);
echo $cars['Toyota'][4] . "\n";
echo $cars['Lexus'][1] . "\n";
echo $cars['Mazda'][2] . "\n";
?>