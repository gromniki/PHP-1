<?php

require_once __DIR__ . '/classes/Uploader.php';

$uploader = new Uploader('fileImage');

$uploader->isUploaded();
$uploader->upload();

//$result = $uploader->upload();
//
//if (true === $result) {
//    echo 'Файл успешно загружен';
//} else {
//    echo 'Ошибка загрузки файла';
//}

//$view = new View();
//
//$view->assign('images', $uploader)->display(__DIR__ . '/templates/guestBook.php');
//
//$uploader->isUploaded();
//$uploader->upload();

