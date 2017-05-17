<?php

require __DIR__ . '/fuctions.php';

$comments = readFiles(__DIR__ . '/data/comments.txt');
$comments[] = $_POST['comment'];

file_put_contents(__DIR__ . '/data/comments.txt', implode("\n", $comments) );

header('Location: /lesson-4.php');