<?php
/**
 * 1. Создайте класс GuestBook, который будет удовлетворять следующим требованиям:
 * • В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте
 * защищенное свойство объекта для хранения данных)
 * • Метод getData() возвращает массив записей гостевой книги
 * • Метод append($text) добавляет новую запись к массиву записей
 * • Метод save() сохраняет массив в файл
 */

class GuestBook
{
    protected function __construct($path) {
        $this->path = $path;
    }

    public function getData()
    {
        //$comments = readFiles(__DIR__ . '/data/comments.txt');
    }

    public function append($text)
    {
        $text[] = $_POST['comment'];
        //return $this->path;
    }

    public function save()
    {
        file_put_contents(__DIR__ . '/data/comments.txt', implode("\n", $text));
    }
}

$guestbook = new GuestBook(__DIR__ . '/data/comments.txt');

var_dump($guestbook);
