<?php

require __DIR__ . '/functions.php';

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
        <!-- Задание 1. Гостевая книга -->
        <article class="guestbook">
            <h3>Гостевая книга</h3>

            <!-- Вывод комментариев -->
            <?php
            foreach (guestBook() as $comment) {
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
                              placeholder="Ваш комментарий" required></textarea>
                    <button type="submit" class="btn  btn-success">Добавить комментарий</button>
                </fieldset>
            </form>
            <!-- /Форма добавления комментария -->
        </article>
        <!-- /Задание 1. Гостевая книга -->
    </section>
</main>

</body>
</html>