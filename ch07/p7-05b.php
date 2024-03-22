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
$names = array("Richard", "Tom", "Judy", "Mary", "Jessica");
$group = [];
for ($i = 0; $i < 5; $i++)
    $group[$i] = new Person($names[$i]);
foreach ($group as $member)
    $member->sayHello();
?>