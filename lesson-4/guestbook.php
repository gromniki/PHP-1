<?php

require __DIR__ . '/functions.php';

if (isset($_FILES['fileimage'])) {
    $f = $_FILES['fileimage'];

    // создаю переменную с размером файла
    $size = 1024000;

    // В начале использовал функцию basename http://php.net/manual/ru/function.basename.php,
    // чтобы оставалось имя файла, как на компьютере пользователя, но потом понял, что она не нужна
    // и отказался от неё.
    $fupload = __DIR__ . '/img/uploads/' . $f['name'];


    if (0 == $f['error']) {
        // Проверяю тип файла JPG или PNG
        if ('image/jpeg' == $f['type'] || 'image/png' == $f['type']) {
            if ($f['size'] > $size) {
                echo 'Превышен размер файла в 1 Мб. Выберите картинку меньшего размера';
            } else {
                move_uploaded_file($f['tmp_name'], $fupload);
                echo 'Файл ' . $f['name'] . ' успешно загружен';
            }
        } else {
            echo 'Не правильный тип файла. Можно только JPG или PNG';
        }
    } else {
        echo 'Вы не выбрали картинку';
    }
}

?>

    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Homeworks of PHP-1 Lesson-4</title>

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
<body>

<main class="page-main">
    <section class="container-center">
        <h1>Выполнение домашнего задания урока 4&nbsp;курса &laquo;PHP-1&raquo;</h1>
        <!-- Задание 1. Гостевая книга -->
        <article class="guestbook">
            <h3>1. Гостевая книга</h3>

            <!-- Вывод комментариев -->
            <?php
            foreach (readFiles(__DIR__ . '/data/comments.txt') as $comment) {
                ?>
                <p><?php echo $comment; ?></p>
                <hr>
                <?php
            }
            ?>
            <!-- /Вывод комментариев -->

            <!-- Форма добавления комментария -->
            <form action="/add.php" method="post">
                <fieldset>
                    <legend>Добавить комментарий</legend>
                    <textarea class="fullsize" name="comment" id="" cols="30" rows="4"
                              placeholder="Ваш комментарий"></textarea>
                    <button type="submit" class="btn  btn-success">Добавить комментарий</button>
                </fieldset>
            </form>
            <!-- /Форма добавления комментария -->
        </article>
        <!-- /Задание 1. Гостевая книга -->

        <!-- Задание 2. Загрузка файлов от пользователя -->
        <article class="upload-images">
            <h3>2. Загрузка файлов от пользователя<br>
                <ul class="markers-list">
                    <li>Решите задачу загрузки файла от пользователя в заданное место на сервере с тем же именем
                        файла, что он имел на компьютере пользователя.
                    </li>
                    <li>* Решите задачу ограничения загрузки, например - только файлов JPEG и PNG</li>
                </ul>
            </h3>

            <form action="/guestbook.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Загрузить картинку</legend>
                    <input type="file" name="fileimage">
                    <button type="submit" class="btn btn-success">Отправить картинку</button>
                </fieldset>
            </form>
        </article>
        <!-- /Задание 2. Загрузка файлов от пользователя -->
    </section>
</main>

</body>
</html>