<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homeworks of PHP-1 Lesson-7</title>

    <link rel="stylesheet" href="/lesson-7/css/normalize.css">
    <link rel="stylesheet" href="/lesson-7/css/style.css">
</head>
<body>

<main class="page-main">
    <section class="container-center">
        <h1>Задание 1</h1>
        <!-- Задание 1. Гостевая книга -->
        <article>
            <?php

            var_dump($this->data['book']);

            //var_dump()
            var_dump($this->data['book']->getData());

            //echo $this->data['book'];

            foreach ($this->data['book']->getData() as $record) {
                var_dump($record);
            }
            ?>
        </article>
        <article>
            <form action="/lesson-7/add_record.php" method="post">
                <fieldset>
                    <legend>Добавить комментарий</legend>
                    <textarea class="fullsize" name="comment" id="" cols="30" rows="4"
                              placeholder="Ваш комментарий"></textarea>
                    <button type="submit" class="btn btn-success">Добавить комментарий</button>
                </fieldset>
            </form>
        </article>
        <!-- /Задание 1. Гостевая книга -->
    </section>
</main>

</body>
</html>