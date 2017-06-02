<?php

require __DIR__ . '/classess/TextFile.php';
require __DIR__ . '/classess/GuestBook.php';

$guestBook = new GuestBook(__DIR__ . '/data/comments.txt');
$guestBook->append($_POST['comment']);
$guestBook->save();

header('Location: /');
