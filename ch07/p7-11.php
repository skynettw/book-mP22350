<?php
class Person
{
    protected $myName;
    protected $gender;
    protected $department;
    protected function sayHello()
    {
        echo "Hello, my name is $this->myName.\n";
        if ($this->gender)
            echo "I am a gentleman.\n";
        else
            echo "I am a lady.\n";
        echo "My department is $this->department.\n";
    }
}
class Teacher extends Person
{
    private $years;

    function __construct($name, $gender, $dept, $years)
    {
        $this->myName = $name;
        $this->gender = $gender;
        $this->department = $dept;
        $this->years = $years;
    }
    public function sayHello()
    {
        parent::sayHello();
        echo "I am a teacher.\n";
        echo "I have $this->years years experiences.\n";
    }
}
class Student extends Person
{
    private $grade;

    function __construct($name, $gender, $dept, $grade)
    {
        $this->myName = $name;
        $this->gender = $gender;
        $this->department = $dept;
        $this->grade = $grade;
    }
    public function sayHello()
    {
        parent::sayHello();
        echo "I am a student.\n";
        echo "I am grade $this->grade of the college.\n";
    }
}
?>