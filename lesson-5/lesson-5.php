<?php

require __DIR__ . '/header.php';

$cities = [
    'Архангельск',
    'Кириши',
    'Иркутск',
    'Кострома',
    'Абакан',
    'Нея'
];

function city($char)
{
    $firstChar = substr($city, 1);
    //in_array('$char');
    //return $city;
}


// echo city('A');
// выведет Архангельск

//var_dump(1=="1");
//var_dump([1.5=>12,2=>2]);

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

                <!-- Вывод городов -->

                <!-- /Вывод городов -->

                <!-- Форма добавления комментария -->
                <form action="/lesson-5.php" method="post">
                    <fieldset>
                        <legend>Играем в города</legend>
                        <label for="city">Введите название города</label>
                        <input type="text" name="city" id="city" required>
                        <button type="submit" class="btn btn-success">Узнать ответ</button>
                    </fieldset>
                </form>
                <!-- /Форма добавления комментария -->

                <?php

                if (isset($_POST['city'])) {
                    $city = $_POST['city'];
                    $res = mb_substr($city, -1, null, 'UTF-8');
                }

                echo $res;

                ?>



            </article>
            <!-- /Задание 1. Игра в города -->
        </section>
    </main>

<?php require __DIR__ . '/footer.php'; ?>