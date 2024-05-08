<?php

interface Animal {
    public function getSound() : string;
}

interface FourLegs {
    public function getInfo() : string;
}

interface TwoLegs {
    public function getInfo() : string;
}

class Cat implements Animal, FourLegs {
    public function getSound() : string
    {
        return "meow";
    }

    public function getInfo() : string
    {
        return "This is cat";
    }
}

class Bird implements Animal, TwoLegs {
    public function getSound() : string
    {
        return "chic-chic";
    }

    public function getInfo() : string
    {
        return "This is bird";
    }
}

$cat = new Cat();
$bird = new Bird();

echo $bird->getSound() . "\n";
echo $cat->getInfo();