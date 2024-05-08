<?php

/*1. StudentInterface создавать етіңіз, ішін осы методтармен толтырыңыз.

read(string $subject): void - бір сабақты оқу
getGpa(): int - студенттің GPA
doSession(string $subject): void - экзамен тапсыру
getSubjects(): array - қандай предметтер оқиды

Student классы StudentInterface ты имплементировать етсін
 және Human классын сол қалыпты наследовать етіп қалсын.*/

interface StudentInterface {
    public function read(string $subject): void;
    public function getGpa(): int;
    public function doSession(string $subject): void;
    public function getSubjects(): array;
}

class Student2 implements StudentInterface {
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
}
