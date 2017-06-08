<?php

/*
 * Напишите функцию, которая будет читать этот файл и возвращать массив записей гостевой книги
 */

function arrayEntriesGuestBook($file)
{
    return file($file, FILE_IGNORE_NEW_LINES);
}
