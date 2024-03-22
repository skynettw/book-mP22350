<?php
function card_no($n)
{
    switch ($n) {
        case 1:
            return 'A';
        case 11:
            return 'J';
        case 12:
            return 'Q';
        case 13:
            return 'K';
        default:
            return $n;
    }
}
$card_type = array(" 紅心 ", " 黑桃 ", " 方塊 ", " 梅花 ");
$deck = range(0, 51, 1);
shuffle($deck);
echo "Your cards are:\n";
for ($i = 0; $i < 5; $i++)
    echo $card_type[(int)($deck[$i] / 13)] . card_no($deck[$i] % 13 + 1) . "\n";
?>