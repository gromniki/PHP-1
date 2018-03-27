<?php

require __DIR__ . '/classes/GuestBook.php';

$record = new GuestBook(__DIR__ . '/data/comments.txt');

$record->append($_POST['comment']);
$record->save();

header('Location: /lesson-7/guestBook.php');
