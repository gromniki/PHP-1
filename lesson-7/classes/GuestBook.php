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
    public $path;
    protected $data;

    public function __construct(string $file)
    {
        $lines  = file($file, FILE_IGNORE_NEW_LINES);
        $this->data = [];
        foreach ($lines as $line)
        {
            $this->data[] = new GuestBookRecord($line, 'Есенин');
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function append(GuestBookRecord $record)
    {
        return $this->data[] = $record;
    }

    public function save()
    {
        $data = [];
        foreach ($this->getData() as $record){
            $data[] = $record->getMessage();
        }

        file_put_contents($this->path, implode("\n", $this->data));
        //return $this;
    }
}
