<?php
function circleArea($radius): float
{
    if ($radius > 0) {
        return 3.14 * ($radius ** 2);
    } else {
        return 0;
    }
}
function exponentiationByVal($value, $degree): float
{
    return $value ** $degree;
}
function exponentiationByRef(&$value, $degree): void
{
    $value = $value ** $degree;
}

// Вычисление радиуса с передачей параметров в функцию по значению
$radius = readline("Введите радиус круга для вычисления его площади: ");
$circleArea = circleArea($radius);
echo "Радиус круга равен: $circleArea ед/кв;\n";

// Вычисление значения степени с передачей параметров в функцию по значению
$value = readline("Введите значение основания для вычисления значения степени (передача в функцию по значению): ");
$degree = readline("Введите степень для вычисления значения степени: ");
$exponentiationByVal = exponentiationByVal($value, $degree);
echo "Значение степени равно: $exponentiationByVal\n";
echo "Значение основания осталось прежним: $value\n";

// Вычисление значения степени с передачей параметров в функцию по ссылке (перезаписываем значение основания значением степени)
$value = readline("Введите значение основания для вычисления значения степени (передача в функцию по ссылке): ");
$degree = readline("Введите степень для вычисления значения степени: ");
exponentiationByRef($value, $degree);
echo "Значение основания, которое стало значением степени: $value\n";