<?php

// Инкапсуляция
// Модификаторы доступа - public, private, protected

class User {
    protected string $userName; // свойство
    private string $userPassword; // свойство
    public function setUserName(string $name): void {
        $this->userName = $name;
    }

    public function getUserName(): string {
        return $this->userName;
    }
}

// Наследование
class UserClass extends User {
    private function testMethod() { // setter
        $this->userName = "Наследник";
    }

    public function setTestMethod() {
        $this->testMethod();
    }

    public function getTestMethod() { // setter
        return $this->userName;
    }
}

$user = new User();

$user->setUserName("Ivan");
//$userName = $user->getUserName();

$userClass = new UserClass();
$userClass->setTestMethod();

$userName = $user->getUserName();
$userNameFromRelations = $userClass->getTestMethod();


//var_dump($userName);
//var_dump($userNameFromRelations);


/////////////////////////


class Person {
    private string $name;
    private string $age;

    public function __construct(string $name, string $age) {
        $this->name = $name;
        $this->age = $age;

        $this->getMoreInfo();
    }

    public function setInfo(string $name, string $age):void
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo():string
    {
        return "Меня зовут {$this->name}, мне " . $this->age . " лет.";
    }

    private function getMoreInfo()
    {
        echo "more info...";
    }
}

//$person = new Person("Иван", 30);
//echo $person->getInfo();
//$person->setInfo("Петр", "20");
//echo $person->getInfo();


// Магические методы
// __construct, __destruct

// __get()

class Car {
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __get($property)
    {
        if ($property == 'name') {
            return $this->name;
        }
    }

    public function __toString()
    {
        return "Car name is " . $this->name;
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

$car = new Car("BMW");
//echo $car->name;


// __toString()
echo $car;

// __set()
$car->name = "AUDI";
echo $car;








