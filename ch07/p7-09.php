<?php
class Person
{
    protected $myName;
    protected $gender;
    protected $department;
}
class Teacher extends Person
{
    private $years;

    function __construct($name)
    {
        $this->myName = $name;
    }
    public function sayHello()
    {
        echo "Hello, my name is $this->myName.";
        echo "I am a teacher.\n";
    }
}
class Student extends Person
{
    private $grade;

    function __construct($name)
    {
        $this->myName = $name;
    }
    public function sayHello()
    {
        echo "Hello, my name is $this->myName.";
        echo "I am a student.\n";
    }
}
?>