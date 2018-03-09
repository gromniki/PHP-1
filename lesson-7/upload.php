<?php

require_once __DIR__ . '/classes/Uploader.php';

$uploader = new Uploader('fileImage');
$uploader->isUploaded();
$uploader->upload();

header('Location: /');
