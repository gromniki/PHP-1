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
// http://fi2.php.net/manual/ru/function.mb-strtolower.php

// Сергей, Роман, Пётр, Альберт, Аристарх, Артём, Денис, Вячеслав, Павел, Леонид
// Людмила, Ирина, Анастасия, Светлана, Дарья, Любовь

function gender($name)
{
    $lastCharacter = substr("$name", -2); // возвращает последнюю букву имени

    // привожу строку к нижнему регистру, в случае, если пользователь введёт в верхнем регистре, и применяю нужную кодировку
    $lowerLastCharacter = mb_strtolower($lastCharacter, 'UTF-8');

    if (
        $lowerLastCharacter == 'й' ||
        $lowerLastCharacter == 'н' ||
        $lowerLastCharacter == 'р' ||
        $lowerLastCharacter == 'т' ||
        $lowerLastCharacter == 'х' ||
        $lowerLastCharacter == 'м' ||
        $lowerLastCharacter == 'с' ||
        $lowerLastCharacter == 'в' ||
        $lowerLastCharacter == 'л' ||
        $lowerLastCharacter == 'д'
    ) {
        return 'Мужчина';
    } elseif (
        $lowerLastCharacter == 'я' ||
        $lowerLastCharacter == 'а' ||
        $lowerLastCharacter == 'ь'
    ) {
        return 'Женщина';
    } else {
        return null;
    }
}

assert('Мужчина' == gender('Роман'));
assert('Женщина' == gender('Любовь'));
assert(null == gender('колобок'));
assert(null == gender(''));

// var_dump(gender('Владислав'));

