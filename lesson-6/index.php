<?php

require __DIR__ . '/classes/GuestBook.php';
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
        <h1>Выполнение домашнего задания урока 6&nbsp;курса &laquo;PHP-1&raquo;. ООП.</h1>
        <!-- Задание 1.  -->
        <article>
            <?php

            $guestBook = new GuestBook(__DIR__ . '/data/comments.txt');

            foreach ($guestBook->getData() as $line) {
                ?>
                <p><?php echo $line; ?></p>
                <hr>
                <?php
            }
            ?>
        </article>

        <article>
            <form action="/add.php" method="post">
                <fieldset>
                    <legend>Добавить комментарий</legend>
                    <textarea class="fullsize" name="comment" id="" cols="30" rows="4"
                              placeholder="Ваш комментарий"></textarea>
                    <button type="submit" class="btn btn-success">Добавить комментарий</button>
                </fieldset>
            </form>
        </article>
        <!-- /Задание 1.  -->

        <hr>

        <!-- Задание 2. Загрузчик файлов -->
        <article>
            <?php

            //$guestBook = new GuestBook(__DIR__ . '/data/comments.txt');

            foreach ($guestBook->getData() as $line) {
                ?>
                <p><?php echo $line; ?></p>
                <hr>
                <?php
            }
            ?>
        </article>

        <article>
            <form action="/upload.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Загрузить картинку</legend>
                    <input type="file" name="fileimage">
                    <button type="submit" class="btn btn-success">Отправить картинку</button>
                </fieldset>
            </form>
        </article>
        <!-- /Задание 2. Загрузчик файлов -->
    </section>
</main>

</body>
</html>