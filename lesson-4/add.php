<?php

require __DIR__ . '/functions.php';

$comments = guestBook();
$comments[] = $_POST['comment'];

file_put_contents(__DIR__ . '/data/comments.txt', implode("\n", $comments) );

header('Location: /guestbook.php');