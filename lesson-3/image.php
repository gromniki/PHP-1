<?php

$images = require  __DIR__ . '/data.php';

$getImage = $images[$_GET['id']];

?>

<img class="gallery__image" src="/img/<?php echo $getImage; ?>" alt="<?php echo $getImage; ?>"><br>
<a class="btn  btn-success  btn-back" href="/index.php">Назад</a>
