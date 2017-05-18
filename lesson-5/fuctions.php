<?php

require __DIR__ . '/data/cities.php';

// Функция для игры в города
function city($char, $arrCities)
{
    $char = mb_strtoupper($char);

    foreach ($arrCities as $city) {
        // Воспользовался функцией mb_strcut чтобы отсечь в слове лишние символы http://fi2.php.net/manual/ru/function.mb-strcut.php
        if ($char == mb_strcut($city, 1, 2)) {
            return $city;
        }
    }
    return null;
}

assert('Санкт-Петербург' === city('с', $cities));
assert('Архангельск' === city('А', $cities));
assert('Кострома' === city('к', $cities));
assert('Электрогорск' === city('Э', $cities));
assert('Улан-Удэ' === city('у', $cities));