<?php
function howpcp_add_something_to_title($title)
{
    return "@@:" . $title;
}
add_filter("the_title", "howpcp_add_something_to_title");
