<?php

// Проверяю, существует ли элемент массива с ключом number1 в массиве GET
if (isset($_GET['number1'])) {
    $num1 = $_GET['number1'];
} else {
    $num1 = 0;
}

// Проверяю, существует ли элемент массива с ключом number2 в массиве GET
if (isset($_GET['number2'])) {
    $num2 = $_GET['number2'];
} else {
    $num2 = 0;
}

if (isset($_GET['arithmetic'])) {
    $operand = $_GET['arithmetic'];

    switch ($operand) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
    }
} else {
    $operand = '';
}

// Создаю массив со знаками операций
$operandArr = [
    1 => '+',
    2 => '-',
    3 => '*',
    4 => '/',
];

require __DIR__ . '/header.php';

?>
    <main class="page-main">
        <section class="container-center">
            <h1>Выполнение домашнего задания урока 3&nbsp;курса &laquo;PHP-1&raquo;</h1>

            <!-- Задание 1. Программа-калькулятор -->
            <article class="calculator">
                <h3>1. Напишите программу-калькулятор<br>
                    <ul class="markers-list">
                        <li>Форма для ввода двух чисел, выбора знака операции и кнопка "равно"</li>
                        <li>Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт, который их примет
                            и выведет выражение и его результат
                        </li>
                        <li>* Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP,
                            введенные числа останутся в input-ах, а результат появится после кнопки "равно"
                        </li>
                    </ul>
                </h3>

                <form class="form-inline" action="/lesson-3.php" method="get">
                    <fieldset>
                        <legend>Простой калькулятор</legend>
                        <input class="form-control" type="number" name="number1" placeholder="Число 1"
                               value="<?php echo $num1; ?>">
                        <select class="form-control" name="arithmetic">

                            <?php
                            foreach ($operandArr as $oper) {
                                ?>

                                <option value="<?php echo $oper; ?>"
                                    <?php
                                    if ($operand == $oper) {
                                        ?>
                                        selected
                                        <?php
                                    }
                                    ?>
                                ><?php echo $oper; ?></option>

                                <?php
                            }
                            ?>

                        </select>
                        <input class="form-control" type="number" name="number2" placeholder="Число 2"
                               value="<?php echo $num2; ?>">
                        <button type="submit" class="btn btn-success">=</button>

                        <!-- Вывод результата подсчета двух чисел в калькуляторе -->
                        <strong><?php echo $result; ?></strong>
                    </fieldset>
                </form>
            </article>
            <!-- /Задание 1. Программа-калькулятор -->

            <!-- Задание 2. Фотогалерея -->
            <article class="gallery">
                <h3>2. Создайте примитивную фотогалерею из двух страниц
                    <ul class="markers-list">
                        <li>Пусть на главной странице галереи выводятся 3-4 изображения</li>
                        <li>Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер
                            изображения
                        </li>
                        <li>На странице image.php вы по номеру понимаете, какое изображение вывести в браузер и выводите
                            его. Я ожидаю, что для этого пункта программы вы создадите массив вида [1 => 'cat.jpg',
                            2=>'dog.jpg', ...], однако вы можете предложить и другое решение
                        </li>
                    </ul>
                </h3>

                <div class="gallery__list">
                    <a href="/image.php?id=1">
                        <img src="/img/fullpic-02.jpg" width="290" alt="">
                    </a>
                    <a href="/image.php?id=2">
                        <img src="/img/fullpic-03.jpg" width="290" alt="">
                    </a>
                    <a href="/image.php?id=3">
                        <img src="/img/fullpic-04.jpg" width="290" alt="">
                    </a>
                    <a href="/image.php?id=4">
                        <img src="/img/fullpic-05.jpg" width="290" alt="">
                    </a>
                    <a href="/image.php?id=5">
                        <img src="/img/fullpic-06.jpg" width="290" alt="">
                    </a>
                    <a href="/image.php?id=6">
                        <img src="/img/fullpic-07.jpg" width="290" alt="">
                    </a>
                </div>
            </article>
            <!-- /Задание 2. Фотогалерея -->
        </section>
    </main>

<?php require __DIR__ . '/footer.php'; ?>