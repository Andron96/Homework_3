<?php
declare(strict_types=1);
function circleArea(float $radius): float
{
    if ($radius > 0) {
        return 3.14 * ($radius ** 2);
    }
    return 0;
}
function exponentiationByVal(float $value, int $degree): float
{
    return $value ** $degree;
}
function exponentiationByRef(float &$value, int $degree): void
{
    $value = $value ** $degree;
}

// Вычисление радиуса с передачей параметров в функцию по значению
$radius = (float) readline("Введите радиус круга для вычисления его площади: ");
$circleArea = circleArea($radius);
echo "Радиус круга равен: $circleArea ед/кв;\n";

// Вычисление значения степени с передачей параметров в функцию по значению
$value = (float) readline("Введите значение основания для вычисления значения степени (передача в функцию по значению): ");
$degree = (int) readline("Введите степень для вычисления значения степени: ");
$exponentiationByVal = exponentiationByVal($value, $degree);
echo "Значение степени равно: $exponentiationByVal\n";
echo "Значение основания осталось прежним: $value\n";

// Вычисление значения степени с передачей параметров в функцию по ссылке (перезаписываем значение основания значением степени)
$value = (float) readline("Введите значение основания для вычисления значения степени (передача в функцию по ссылке): ");
$degree = (int) readline("Введите степень для вычисления значения степени: ");
exponentiationByRef($value, $degree);
echo "Значение основания, которое стало значением степени: $value\n";