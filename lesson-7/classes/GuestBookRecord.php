<?php

class GuestBookRecord
{
    protected $author;
    protected $message;

    public function __construct(string $message, string $author = null)
    {
        $this->author = $author;
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

//    public function render()
//    {
//        ob_start();
//        include __DIR__ . '/../templates/guestBookRecord.php';
//        $content = ob_get_contents();
//        ob_end_clean();
//
//        return $content;
//    }
}