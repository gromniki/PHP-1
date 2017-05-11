<?php

$getImage = $_GET['id'];

$images = [
    1 => 'fullpic-02.jpg',
    2 => 'fullpic-03.jpg',
    3 => 'fullpic-04.jpg',
    4 => 'fullpic-05.jpg',
    5 => 'fullpic-06.jpg',
    6 => 'fullpic-07.jpg',
];

//var_dump($images);
require __DIR__ . '/header.php';

foreach ($images as $key => $value) {
    if ($getImage == $key) {
        ?>

        <img class="gallery__image" src="/img/<?php echo $value; ?>" alt="<?php echo $value; ?>"><br>
        <a class="btn  btn-success  btn-back" href="/lesson-3.php">Назад</a>

        <?php
    }
}

require __DIR__ . '/footer.php';