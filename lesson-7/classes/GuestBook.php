<?php
/**
 * 1. Создайте класс GuestBook, который будет удовлетворять следующим требованиям:
 * • В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте
 *   защищенное свойство объекта для хранения данных)
 * • Метод getData() возвращает массив записей гостевой книги
 * • Метод append($text) добавляет новую запись к массиву записей
 * • Метод save() сохраняет массив в файл
 */

require_once __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $data;

    public function __construct($file)
    {
        $lines  = file($file, FILE_IGNORE_NEW_LINES);
        $this->data = [];
        foreach ($lines as $line)
        {
            $this->data[] = new GuestBookRecord($line, 'Есенин');
        }
    }

    public function getRecords()
    {
        return $this->data;
    }

    public function add(GuestBookRecord $record)
    {
        $this->data[] = $record;
    }
}


/*require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    public function __construct($path)
    {
        $this->path = $path;
        $this->data = file($this->path, FILE_IGNORE_NEW_LINES);
    }
}*/
