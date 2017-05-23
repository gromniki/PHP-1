<?php

/**
 * Я всё-таки решил создать родительский класс TextFile, чтобы поупражняться в наследовании
 */

//require_once __DIR__ . '/GuestBook.php';

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