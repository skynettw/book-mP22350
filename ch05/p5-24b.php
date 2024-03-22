<?php
$cars = array(
    'Toyota' => array('Wish', 'Altis', 'Camry', 'Yaris', '86'),
    'Lexus' => array('IS', 'ES', 'LS', 'GS'),
    'Mazda' => array('Mazda 2', 'Mazda 5', 'CX-3', 'CX-5')
);
foreach ($cars as $brand => $maker) {
    echo "--------\n";
    echo "$brand\n";
    echo "--------\n";
    foreach ($maker as $model)
        echo "$model\n";
}
?>