<?php

class ClassA
{
    private int $a;
    private int $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function testMethod()
    {
        echo "Hello, I'm method!" . $this->a + $this->b;
    }

    protected function getA()
    {
        return $this->a;
    }

    protected function getB()
    {
        return $this->b;
    }
}

class ClassB extends ClassA
{
    private int $c;

    public function __construct($a, $b)
    {
        parent::__construct($a, $b);
        $this->c = $a + $b;
    }

    public function calculate(): int
    {
        return $this->getA() + $this->getB();
    }

    public function getC(): int // getter
    {
        return $this->c;
    }
}

$classA = new ClassA(3, 4); // Экземпляр класса
//$classA->testMethod();

$classB = new ClassB(5, 7);
$calculate = $classB->getC();

//echo $calculate;


// Абстрактный класс

abstract class Shape
{
    abstract public function area();

    abstract public function perimetr();

    public function test()
    {
        // ...
        return "";
    }
}

class Square extends Shape
{
    private int $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function area()
    {
        return pow($this->a, 2);
    }

    public function perimetr()
    {
        // TODO: Implement perimetr() method.
    }
}

class Circle extends Shape
{
    private float $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function perimetr()
    {
        // TODO: Implement perimetr() method.
    }

    public function diametr()
    {

    }
}

$square = new Square(5);
echo $square->area() . "<br />";

$circle = new Circle(7);
echo $circle->area();


// Интерфейс

interface IBaseProduct
{
    public function getPrice(): float;
}

class Product implements IBaseProduct // Интерфейс реализовывается!!!
{
    private float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

$product = new Product(5.5);
echo "<br/>";
echo $product->getPrice();


// трейт

trait Logging
{
    public function log2(string $string)
    {
        // ...
    }
}

trait Logging2
{
    public function log(string $string)
    {
        // ...
    }
}

class MyClass
{
    use Logging, Logging2;

    public function doSmth()
    {
        $this->log("dfsdfssd");
    }
}


trait Greeting
{
    public function sayHello()
    {
        echo "hello";
    }
}

class MyClass2
{
    use Greeting, TestTrait;

    function test(): void
    {
        // TODO: Implement test() method.
    }
}

$hello = new MyClass2();
echo $hello->sayHello();

trait TestTrait
{
    abstract function test(): void;
}

























