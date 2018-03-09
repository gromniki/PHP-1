<?php

/**
 * Я всё-таки решил создать родительский класс TextFile, чтобы поупражняться в наследовании
 */

class TextFile
{
    public $path;
    protected $data;

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
        file_put_contents($this->path, implode("\n", $this->data));
    }
}

// продолжение... файл GuestBook.php
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