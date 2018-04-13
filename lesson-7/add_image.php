<?php

require_once __DIR__ . '/classes/Uploader.php';

$uploader = new Uploader('fileImage');

$result = $uploader->upload();

if (true === $result) {
    echo 'Файл успешно загружен';
} else {
    echo 'Ошибка загрузки файла';
}
