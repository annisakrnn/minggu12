<?php
class car{
    public $brand;
    public function startEngine(){
        echo "Engine started: ";
    }
}
$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda<br><br>";

$car1->startEngine();
echo $car2->brand;
?>

<?php
class Animal{
protected $name;
public function __construct($name){
    $this->name = $name;
}
public function eat(){
    echo $this->name . " is eating.<br>";
}
public function sleep(){
    echo $this->name . " is sleeping.<br>";
}
}
?>

<?php
class Cat extends Animal{
    public function meow(){
        echo $this->name . " says meow!<br>";
    }
}
?>

<?php
class Dog extends Animal{
    public function bark(){
        echo $this->name . " says woof!<br>";
    }
}
$cat = new Cat ("Whiskers");
$dog = new Dog("Buddy");

$cat ->eat();
$dog->sleep();

$cat->meow();
$dog->bark();
?>

<?php
interface Shape{
    public function calculateArea();
}
class Circle implements Shape{
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
}
?>

<?php
class Rectangle implements Shape{
    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(){
        return $this->width * $this->height;
    }
}
function printArea(Shape $shape){
    echo "Area: " . $shape->calculateArea() . "<br>";
}
$circle =new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle);
printArea($rectangle);
?>

<?php
class Car04 {
    private $model;
    private $color;

    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
}
$car = new Car04("Toyota", "Blue");

echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

$car->setColor("Red");
echo "Update Color: " . $car->getColor() . "<br>";
?>

<?php
abstract class Shape04 {
    abstract public function calculateArea();
}
class Circle04 extends Shape04 {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle04 extends Shape04 {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle04(5);
$rectangle = new Rectangle04(4, 6);

echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";
?>

<?php
interface shape03{
    public function calculateArea();
}
interface Color{
    public function getColor();
}
class circle03 implements shape03,Color{
    private $radius;
    private $color;

    public function __construct($radius, $color){
        $this->radius = $radius;
        $this->color = $color;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
    public function getColor(){
        return $this->color;
    }
}
$circle = new circle03(5, "Blue");
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Color of Circle: " . $circle->getColor() . "<br>";
?>

<?php
class car03{
    private $brand;
    public function __construct($brand){
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function __destruct(){
        //echo "The car is destroyed.<br>";
    }
}
$car = new car03("Toyota");
echo "Brand: " . $car->getBrand() . "<br>";
?>

<?php
class animal04{
    public $name;
    public $age;
    public $color;

    public function __construct($name, $age, $color){
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    public function getName(){
        return $this->name;
    }
    protected function getAge(){
        return $this->age;
    }
    public function getColor(){
        return $this->color;
    }
}
$animal = new animal04("Dog", 3, "Brown");
echo "Name: " . $animal->name . "<br>";
//echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";
?>