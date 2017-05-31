<?php

require __DIR__ . '/classes/TextFile.php';
require __DIR__ . '/classes/GuestBook.php';

$guestBook = new GuestBook(__DIR__ . '/data/comments.txt');
$guestBook->append($_POST['comment']);
$guestBook->save();

header('Location: /');



