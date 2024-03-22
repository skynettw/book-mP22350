<?php
class Person
{
    private $myName;

    function __construct($name)
    {
        $this->myName = $name;
    }
    public function sayHello()
    {
        echo "Hello! I am $this->myName. Nice to meet you.\n";
    }
}
$a = new Person("Richard");
$a->sayHello();
?>