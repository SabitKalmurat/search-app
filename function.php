<?php

/* function writeMessage(string $greeting, string $about_me, int $age) {
    echo $greeting, $about_me, $age;
}

writeMessage(" Hello guys ","Im_champion ", 19);
writeMessage(" Hi bro ", "Im_best_ITshnik ",19);

function sum(int $a, int $b) {
    echo $a + $b . " \n";
}

sum(5,10);
sum(2,24);
sum(6,3);

function writeMessage($name, $surname) {
    echo $name . ' ' . $surname;
}

writeMessage('Sabit', 'Kalmurat');

function myFunction() {
    echo 'Hello World';
}
myFunction();

function getInfo(string $name, int $age) {
    echo $name . " " . $age;
}
getInfo('Sabit', 19);

function outputFileName() {
    echo "The current file is: " . __FILE__ . "\n";
}

// Call the function to output the current file name
outputFileName();

$text = '1,4,2,67,55,43,90,100';

// Explode the string into an array based on commas
$textArray = explode(',', $text);

// Output the resulting array
print_r($textArray);
Санның факториалын (теріс емес бүтін сан) есептейтін функцияны жазыңыз. Функция санды аргумент(параметр) ретінде қабылдайды.

$a = 5;

function getFactorial(int $a) : int
{
    код жазылады
    return $айнымалы
}

Результат 120, өйткені 5 тің факториалы ол 1 * 2 * 3 * 4 * 5 = 120;

function nFactorial($san) {
    echo $san;
}  */
function getFactorial(int $a) {
    if ($a <= 1) {
        return 1;
    } else {
        return $a * getFactorial($a - 1);
    }
}

$a = 4;
echo getFactorial($a);
