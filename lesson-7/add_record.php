<?php

require __DIR__ . '/classes/GuestBook.php';

if (isset($_POST['comment'])) {
    $newRecord = new GuestBookRecord($_POST['comment']);

    $book = new GuestBook(__DIR__ . '/data/comments.txt');
    $book->append($newRecord)->save();

    header('Location: /lesson-7/guestBook.php');
} else {
    die;
}

