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
    protected $data;

    public function __construct($path) {
        $this->path = $path;
        return $this->data;
    }

    public function getData()
    {
        //$comments = readFiles(__DIR__ . '/data/comments.txt');
    }

    public function append($text)
    {
        //$this->text = ;

        $text[] = $_POST['comment'];
        //return $this->path;
    }

    public function save()
    {
        return $this;
        //return file_put_contents(__DIR__ . '/data/comments.txt', implode("\n", $text));
    }
}

$guestbook = new GuestBook(__DIR__ . '/data/comments.txt');

//$guestbook
//$guestbook->save();

var_dump($guestbook);
