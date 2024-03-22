<?php
class Person
{
    private $myName;

    function __construct($name = NULL)
    {
        $this->myName = $name;
    }

    public function setName($name)
    {
        $this->myName = $name;
    }
    public function sayHello()
    {
        if ($this->myName)
            echo "Hello! I am $this->myName. Nice to meet you.\n";
        else
            echo "Hi, I am nobody!\n";
    }
}
?>