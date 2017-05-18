<?php

require __DIR__ . '/header.php';

if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $char = mb_substr($city, -1, null, 'UTF-8');

    // Отсекаю мягкий и твердый знаки, так как городов на такие буквы не существует
    // А на букву Ы оказывается есть города https://traditio.wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%BE%D0%B2_%D0%BD%D0%B0_%D0%B1%D1%83%D0%BA%D0%B2%D1%83_%D0%AB
    if ('ь' == $char || 'ъ' == $char) {
        $char = mb_substr($city, -2, 1, 'UTF-8');
    }
} else {
    $char = null;
}

?>

    <main class="page-main">
        <section class="container-center">
            <h1>Выполнение домашнего задания урока 5&nbsp;курса &laquo;PHP-1&raquo;</h1>
            <!-- Задание 1. Игра в города -->
            <article class="guestbook">
                <h3>1. Игра в города<br>
                    <ul class="markers-list">
                        <li>Создайте "базу" городов. Это, конечно же, массив с названиями городов, который вам придется
                            заполнить вручную в коде.</li>
                        <li>Напишите функцию (и тест для нее), которая по первой букве названия города вёрнет из этого
                            массива первое встреченное название города на эту букву.</li>
                        <li>Напишите скрипт, который примет из формы введенное пользователем название города, определит
                            у него последнюю букву и, применив функцию из пункта 2, "сделает ход" - напечатает название
                            города, который начинается на эту букву</li>
                    </ul>
                </h3>

                <form action="/lesson-5.php" method="post">
                    <fieldset>
                        <legend>Играем в города</legend>
                        <label for="city">Введите название города</label>
                        <input type="text" name="city" id="city" required>
                        <button type="submit" class="btn btn-success">Узнать ответ</button>
                        <span><?php echo city($char, $cities); ?></span>
                    </fieldset>
                </form>

            </article>
            <!-- /Задание 1. Игра в города -->
        </section>
    </main>

<?php require __DIR__ . '/footer.php'; ?>