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
}