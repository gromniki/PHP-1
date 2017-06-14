<?php

/*
 * Напишите функцию, которая будет читать этот файл и возвращать массив записей гостевой книги
 */

function guestBook()
{
    return file(__DIR__ . '/data/comments.txt', FILE_IGNORE_NEW_LINES);
}
