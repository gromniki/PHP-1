<?php
/**
 * 1. Создайте класс GuestBook, который будет удовлетворять следующим требованиям:
 * • В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте
 *   защищенное свойство объекта для хранения данных)
 * • Метод getData() возвращает массив записей гостевой книги
 * • Метод append($text) добавляет новую запись к массиву записей
 * • Метод save() сохраняет массив в файл
 */

class GuestBook
{
    protected $data;

    public function __construct($path, $data)
	{
        $this->path = $path;
        $this->data = $data;
    }

    public function getData()
    {
		return $this->data;
    }

    public function append($text)
    {
        $this->data[] = $text;
    }

    public function save()
    {
        //return $this;
        //return file_put_contents(__DIR__ . '/data/comments.txt', implode("\n", $text));
    }
}

$guestBook = new GuestBook(__DIR__ . '/data/comments.txt', file(__DIR__ . '/data/comments.txt', FILE_IGNORE_NEW_LINES));
//$guestBook->getData();
$guestBook->append(isset($_POST['comment']));
//$guestBook->append($text[] = $_POST['comment']);


//$guestbook->save();

var_dump($guestBook);
