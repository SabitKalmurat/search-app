<?php

abstract class Car {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract public function getInfo() : string;
}

class Mercedes extends Car {
    public function getInfo() : string {
        return "$this->name";
    }
}

class BMW extends Car {
    public function getInfo() : string {
        return "$this->name";
    }
}

$mercedes = new Mercedes("BENZ");
$bmw = new BMW("BMW_");

echo $mercedes->getInfo() . "\n";
echo $bmw->getInfo();
