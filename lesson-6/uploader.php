<?php

require __DIR__ . '/classes/Uploader.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homeworks of PHP-1 Lesson-6</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<main class="page-main">
    <section class="container-center">
        <!-- Задание 2. Загрузчик файлов -->
        <h1>Пишем свой загрузчик файлов на ООП</h1>
        <article>
            <?php
            $arrayImages = scandir(__DIR__ . '/img/uploads');
            unset($arrayImages['0'], $arrayImages['1']);

            foreach ($arrayImages as $image) {
                ?>
                <img src="/img/uploads/<?php echo $image; ?>" alt="<?php echo $image; ?>">
                <?php
            }
            ?>
        </article>

        <article>
            <form action="/handler-uploader.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Загрузить картинку</legend>
                    <input type="file" name="fileImage" required>
                    <button type="submit" class="btn  btn-success">Отправить картинку</button>
                </fieldset>
            </form>
        </article>
        <!-- /Задание 2. Загрузчик файлов -->
    </section>
</main>

</body>
</html>