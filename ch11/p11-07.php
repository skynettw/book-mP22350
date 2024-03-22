<?php
function my_quotes()
{
    $quotes = array(
        " 今日事今日畢 ",
        " 知識就是力量 ",
        " 今日你不做計畫，明日就成為別人的計畫 "
    );
    echo "<p id='my-quotes'>" . $quotes[rand(0, count($quotes) - 1)] . "</p>";
}
add_action('admin_notices', 'my_quotes');
function my_quotes_css()
{
    echo "
    <style type='text/css'>
    #my-quotes {
    background-color: #8f8;
    padding: 5px 5px 5px 5px;
    font-size: 1.5em;
    }
    </style>
    ";
}
add_action('admin_head', 'my_quotes_css');
