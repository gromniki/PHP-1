<?php

require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$book = new GuestBook(__DIR__ . '/data/comments.txt');

$view = new View();

$view->assign('book', $book)->display(__DIR__ . '/templates/guestBook.php');
