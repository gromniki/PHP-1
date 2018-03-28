<?php

require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$book = new GuestBook(__DIR__ . '/data/comments.txt');

$view = new View();

$view->display(__DIR__ . '/templates/guestBook.php');


//$view->assign('Book', $book)->display(__DIR__ . '/templates/guestBook.php');

//$view->assign('someName', );

//include __DIR__ . '/templates/guestBook.php';

