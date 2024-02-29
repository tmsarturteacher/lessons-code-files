<?php

//function test() {
//    static $a = 0;
//    echo $a;
//    $a++;
//}
//
//test();
//test();
//test();

//class Math
//{
//    public static int $count = 0; // статическое свойство
//    public int $nonStaticCount = 0; // не статическое свойство
//    public static function add(float $a, float $b)
//    {
//        return $a + $b;
//    }
//
//    public static function increment()
//    {
//        self::$count++;
//    }
//
//    public function NonStaticIncrement()
//    {
//        $this->nonStaticCount++;
//    }
//
//    public function getNonStaticCount(): int
//    {
//        return $this->nonStaticCount;
//    }
//}

//$result = Math::add(2, 3);
//echo $result . "<br />";

//Math::increment();
//Math::increment();
//Math::increment();
//echo Math::$count;
//
//echo "<br>";
//
//$math = new Math();
//$math->NonStaticIncrement();
//$math->NonStaticIncrement();
//$math->NonStaticIncrement();
//echo $math->getNonStaticCount();


//class Cache
//{
//    private static array $data = [];
//
//    public static function getData(string $key): string|null
//    {
//        if (isset(self::$data[$key])) {
//            return self::$data[$key];
//        } else {
//            return null;
//        }
//    }
//
//    public static function setData($key, $value): void
//    {
//        self::$data[$key] = $value;
//    }
//}
//
//
//Cache::setData("test", "cache");
//echo Cache::getData("test");
//echo Cache::getData("test2");


//class StringHelper
//{
//    public static function slugify(string $string) {
//        $string = preg_replace('/[^a-z0-9]+/i', '-', $string);
//        $string = trim($string, '-');
//        $string = strtolower($string);
//        return $string;
//    }
//
//    public function dateEUFormat(string $date) {
//       // ..
//    }
//}
//
//$string = "Hello helper its my world";
//echo $string . "<br />";
//echo StringHelper::slugify("Hello helper its my world");
//
//$helper = new StringHelper();
//$helper->dateEUFormat("2020-02-12");





// Singleton (Одиночка)

class Singleton
{
    private static $instance = null;

    private function __construct() {} // запрещаем создание экземпляров класса

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function doSmth($string)
    {
        return get_called_class();
    }
}


$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

//echo $instance2->doSmth("");


class Vihecle
{
    protected static $color = 'red';

    public function get()
    {
        self::$color;
    }
}

class Car extends Vihecle
{
    public function getColor(): string
    {
        return parent::$color . ' car';
    }
}


$car = new Car();
echo $car->getColor();

























