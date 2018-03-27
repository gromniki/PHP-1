<?php

require __DIR__ . '/classes/GuestBook.php';

$book = new GuestBook(__DIR__ . '/data/comments.txt');

include __DIR__ . '/templates/guestBook.php';

