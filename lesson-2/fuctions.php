<?php

// 2. Функция вычисления дискриминанта квадратного уравнения
function discriminant($b, $a, $c)
{
    return $b ** 2 - 4 * $a * $c;
}

assert(9 == discriminant(5, 2, 2));
assert(0 == discriminant(4, 1, 4));
assert(-39 == discriminant(3, 4, 3));

//var_dump(discriminant(2, 5, 2));


// 3. Что возвращает оператор include
function returnInclude()
{
    return include __DIR__ . '/include.php';
}

// 4. Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени
// (null - если угадать не удалось). Вам придется самостоятельно найти нужные вам строковые функции. Начните с написания тестов для функции.
// http://fi2.php.net/manual/ru/ref.strings.php

// Руслан, Роман, Андрей, Сергей, Павел,
// Людмила, Ирина, Катерина, Анастасия, Светлана, Дарья, Мария, Маргарита

$genderMan = 'Мужской';
$genderWoman = 'Женский';

$mens = 1;

function gender($name)
{
    return $gender;
}


