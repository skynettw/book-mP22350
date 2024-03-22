<?php
abstract class Shape
{
    private $x;
    private $y;
    private $color;
    abstract protected function setXY($x, $y);
    abstract protected function setColor($c);
    abstract protected function showStatus();
}
class Point extends Shape
{
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setColor($c)
    {
        $this->color = $c;
    }
    public function showStatus()
    {
        echo "Point:($this->x,$this->y) in $this->color!\n";
    }
}
class Circle extends Shape
{
    private $radius;
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setColor($c)
    {
        $this->color = $c;
    }
    public function setRadius($r)
    {
        $this->radius = $r;
    }
    public function showStatus()
    {
        echo "Circle:($this->x,$this->y,R:$this->radius) in $this->color!\n";
    }
}
$a = new Point();
$a->setXY(100, 100);
$a->setColor('Yellow');
$a->showStatus();
$c = new Circle();
$c->setXY(200, 200);
$c->setRadius(50);
$c->setColor('Blue');
$c->showStatus();
?>