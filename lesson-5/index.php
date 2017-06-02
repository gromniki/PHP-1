<?php

require __DIR__ . '/functions.php';
$cities = require __DIR__ . '/data/cities.php';

if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $char = mb_substr($city, -1, null, 'UTF-8');

    // Отсекаю мягкий и твердый знаки, так как городов на такие буквы не существует
    // А на букву Ы оказывается есть города https://traditio.wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%BE%D0%B2_%D0%BD%D0%B0_%D0%B1%D1%83%D0%BA%D0%B2%D1%83_%D0%AB
    if ('ь' == $char || 'ъ' == $char) {
        $char = mb_substr($city, -2, 1, 'UTF-8');
    }
} else {
    $city = null;
    $char = null;
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homeworks of PHP-1 Lesson-5</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<main class="page-main">
    <section class="container-center">
        <h1>Выполнение домашнего задания урока 5&nbsp;курса &laquo;PHP-1&raquo;</h1>
        <!-- Задание 1. Игра в города -->
        <article class="guestbook">
            <form action="/index.php" method="post">
                <fieldset>
                    <legend>Играем в города</legend>
                    <label for="city">Введите название города</label>
                    <input type="text" name="city" id="city" required>
                    <button type="submit" class="btn btn-success">Узнать ответ</button>
                    <strong><?php echo city($char, $cities); ?></strong>
                </fieldset>
            </form>
        </article>
        <!-- /Задание 1. Игра в города -->
    </section>
</main>

</body>
</html>