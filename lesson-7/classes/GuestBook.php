<?php

require_once __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    public $path;
    protected $data = [];

    public function __construct(string $path)
    {
        $this->path = $path;
        $lines  = file($path, FILE_IGNORE_NEW_LINES);

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
        $this->data[] = $record;
        return $this;
    }

    public function save()
    {
        $data = [];
        foreach ($this->getData() as $record){
            $data[] = $record->getMessage();
        }

        file_put_contents($this->path, implode("\n", $data));
        return $this;
    }
}
