<?php

// Функция чтения файла и возвращения его строк в виде массива. Используется для чтения файла с комментариями.
function readFiles($path)
{
    return file($path, FILE_IGNORE_NEW_LINES);
}
