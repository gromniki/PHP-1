<?php

require __DIR__ . '/header.php';
require __DIR__ . '/image.php';

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
                            и
                            выведет выражение и его результат
                        </li>
                        <li>* Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP,
                            введенные
                            числа останутся в input-ах, а результат появится после кнопки "равно"
                        </li>
                    </ul>
                </h3>


                <?php

                $num1 = $_GET['number1'];
                $num2 = $_GET['number2'];
                $operand = $_GET['arithmetic'];

                var_dump($num1);
                echo '<br>';
                var_dump($num2);
                echo '<br>';
                var_dump($operand);
                echo '<br>';

                switch ($operand) {
                    case '+':
                        echo $num1 + $num2;
                        break;
                    case '-':
                        echo $num1 - $num2;
                        break;
                    case '*':
                        echo $num1 * $num2;
                        break;
                    case '/':
                        echo $num1 / $num2;
                        break;
                }

                echo $operand;
                echo '<br>';
                //$result = $num1 . $operand . $num2;
                $result = $operand;
                var_dump($result);

                ?>
                <form class="form-inline" action="/lesson-3.php" method="get">
                    <fieldset>
                        <legend>Простой калькулятор</legend>
                        <input class="form-control" type="number" name="number1" placeholder="Число 1"
                               value="<?php echo $num1; ?>">
                        <select class="form-control" name="arithmetic">
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
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
                    <?php
                    foreach ($images as $key => $value) {
                        ?>

                        <a href="/image.php?id=02">
                            <img src="/img/<?php echo $value; ?>" width="290" alt="">
                        </a>

                        <?php
                    }
                    ?>
                </div>
            </article>
            <!-- /Задание 2. Фотогалерея -->
        </section>
    </main>

<?php require __DIR__ . '/footer.php'; ?>