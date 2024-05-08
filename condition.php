<?php

/* class Fruit {
    public string $name;


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $x): void
    {
        $this->name = $x;
    }
}

$fruit1 = new Fruit();
$fruit1->setName('banana');

echo $fruit1->getName();                  */

global $student1;

class Human {
    public string $name;
    public string $surname;
    public int $age;

    public function __construct(string $name, string $surname, int $age)
    {
        $this->name    = $name;
        $this->surname = $surname;
        $this->age     = $age;
    }



    public function __destruct()
    {
        echo "Student name is $this->name, surname is $this->surname, age is $this->age, $this->id". "\n";
    }

    /* public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getAge(): int
    {
        return $this->age;
    }  */

}

class Student extends Human implements StudentInterface {

    public function getGpa() : int
    {
        return "3,2";
    }
    public function read(string $subject) : void
    {
        return ;
    }
    public function doSession(string $subject): void
    {
        return ;
    }
    public function getSubjects(): array
    {
        return  "[2,3,4,5]";
    }
    public int $id;
    public function __construct(string $name, string $surname, int $age, int $id)
    {
        parent::__construct($name, $surname, $age);

        $this->id= $id;
    }

}


$student1 = new Student('Jon', 'Doe', 19,234523432);
$student2 = new Human('Sabit','Kalmurat',19);
echo $student1->getGpa();