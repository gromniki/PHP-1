<?php

$image = $_GET['id'];

$images = [
    1 => 'fullpic-02.jpg',
    2 => 'fullpic-03.jpg',
    3 => 'fullpic-04.jpg',
    4 => 'fullpic-05.jpg',
    5 => 'fullpic-06.jpg',
    6 => 'fullpic-07.jpg',
];

//var_dump($images);

?>

<div class="image-page">
    <img src="/img/<?php echo $image; ?>" alt="<?php echo $image; ?>"><br>
    <a class="btn btn-success" href="/lesson-3.php">Назад</a>
</div>