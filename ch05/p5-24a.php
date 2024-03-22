<?php
$cars = array(
    'Toyota' => array('Wish', 'Altis', 'Camry', 'Yaris', '86'),
    'Lexus' => array('IS', 'ES', 'LS', 'GS'),
    'Mazda' => array('Mazda 2', 'Mazda 5', 'CX-3', 'CX-5')
);
echo "Toyota's car model:\n";
foreach ($cars['Toyota'] as $model) {
    echo "$model\n";
}
?>