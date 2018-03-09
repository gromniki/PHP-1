<?php

require __DIR__ . '/classes/TextFile.php';
require __DIR__ . '/classes/GuestBook.php';

$Book = new GuestBook(__DIR__ . '/data/comments.txt');
//$Book->append($_POST['comment']);
//$Book->save();

header('Location: /');
