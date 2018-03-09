<?php

require __DIR__ . '/classes/GuestBook.php';

$book = new GuestBook(__DIR__ . '/data/comments.txt');

include __DIR__ . '/templates/index.php';

//class User
//{
//    public $name = 'Имя';
//    public $city = 'Город';
//    public $surname = '';
//
//    function getInfo()
//    {
//        return $this->name . ' ' . $this->surname;
//    }
//
//}
//
//$admin = new User;
//$admin->name = 'Рома';
//$admin->surname = 'Голубев';
//echo 'Пользователь: ' . $admin->getInfo();

