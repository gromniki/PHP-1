<?php require __DIR__ . '/header.php'; ?>

    <main class="page-main">
        <section class="container-center">
            <h1>Выполнение домашнего задания урока 2&nbsp;курса &laquo;PHP-1&raquo;</h1>

            <!-- Задание 1. Таблица истинности -->
            <article class="table-true">
                <h3>1. Напишите программу, которая составит и выведет в браузер таблицу истинности для логических
                    операторов
                    &&, || и xor.</h3>

                <table class="table-operand">
                    <caption>Таблицы истинности</caption>
                    <tr>
                        <th>&&</th>
                        <th>0</th>
                        <th>1</th>
                    </tr>
                    <tr>
                        <th>0</th>
                        <td><?php echo (int)(false && false); ?></td>
                        <td><?php echo (int)(false && true); ?></td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td><?php echo (int)(true && false); ?></td>
                        <td><?php echo (int)(true && true); ?></td>
                    </tr>
                </table>

                <table class="table-operand">
                    <tr>
                        <th>||</th>
                        <th>0</th>
                        <th>1</th>
                    </tr>
                    <tr>
                        <th>0</th>
                        <td><?php echo (int)(false || false); ?></td>
                        <td><?php echo (int)(false || true); ?></td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td><?php echo (int)(true || false); ?></td>
                        <td><?php echo (int)(true || true); ?></td>
                    </tr>
                </table>

                <table class="table-operand">
                    <tr>
                        <th>xor</th>
                        <th>0</th>
                        <th>1</th>
                    </tr>
                    <tr>
                        <th>0</th>
                        <td><?php echo (int)(false xor false); ?></td>
                        <td><?php echo (int)(false xor true); ?></td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td><?php echo (int)(true xor false); ?></td>
                        <td><?php echo (int)(true xor true); ?></td>
                    </tr>
                </table>
            </article>
            <!-- /Задание 1. Таблица истинности -->

            <!-- Задание 2. Вычисление дискриминанта квадратного уравнения -->
            <article class="equation">
                <h3>2. Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами. Используя
                    эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод
                    решения.</h3>

                <p>Дискриминант квадратного уравнения: D = b<sup>2</sup> - 4ac</p>

                <?php
                $a = 2;
                $b = 7;
                $c = 3;
                $D = discriminant($b, $a, $c);
                ?>

                <ul>
                    <li>a = <?php echo $a; ?></li>
                    <li>b = <?php echo $b; ?></li>
                    <li>c = <?php echo $c; ?></li>
                    <li>Дискриминант D = <?php echo $b; ?><sup>2</sup> -
                        4&times;<?php echo $a; ?>&times;<?php echo $c; ?> = <?php echo $D; ?></li>
                </ul>

                <?php
                switch (true) {
                    case ($D > 0):
                        $x1 = (-$b + sqrt($D)) / (2 * $a);
                        $x2 = (-$b - sqrt($D)) / (2 * $a);
                        ?>

                        <div class="equation__table">
                            <table>
                                <tr>
                                    <td rowspan="2">x<sub>1,2</sub> =</td>
                                    <td class="downline">-(<?php echo $b; ?>) &#177; &#8730;<span
                                            class="upline">(<?php echo $b; ?>
                                            )<sup>2</sup> - 4 &#215; <?php echo $a; ?>
                                            &#215; <?php echo $c; ?></span></td>
                                </tr>
                                <tr class="downnumber">
                                    <td>2 &#215; <?php echo $a; ?></span></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td rowspan="2">x<sub>1</sub> =</td>
                                    <td class="downline">-<?php echo $b; ?> + &#8730;<span
                                            class="upline"><?php echo $D; ?></td>
                                    <td rowspan="2"> = <?php echo $x1; ?> </td>
                                </tr>
                                <tr class="downnumber">
                                    <td>2&times;<?php echo $a; ?></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td rowspan="2">x<sub>2</sub> =</td>
                                    <td class="downline">-<?php echo $b; ?> - &#8730;<span
                                            class="upline"><?php echo $D; ?></td>
                                    <td rowspan="2"> = <?php echo $x2; ?> </td>
                                </tr>
                                <tr class="downnumber">
                                    <td>2&times;<?php echo $a; ?></td>
                                </tr>
                            </table>
                        </div>

                        <?php
                        break;
                    case (0 == $D):
                        $x = (-$b + sqrt($D)) / (2 * $a);
                        ?>

                        <div class="equation__table">
                            <table>
                                <tr>
                                    <td rowspan="2">x =</td>
                                    <td class="downline">-(<?php echo $b; ?>) &#177; &#8730;<span
                                            class="upline">(<?php echo $b; ?>
                                            )<sup>2</sup> - 4 &#215; <?php echo $a; ?>
                                            &#215; <?php echo $c; ?></span></td>
                                </tr>
                                <tr class="downnumber">
                                    <td>2 &#215; <?php echo $a; ?></span></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td rowspan="2">x =</td>
                                    <td class="downline">-<?php echo $b; ?> + &#8730;<span
                                            class="upline"><?php echo $D; ?></td>
                                    <td rowspan="2"> = <?php echo $x; ?> </td>
                                </tr>
                                <tr class="downnumber">
                                    <td>2&times;<?php echo $a; ?></td>
                                </tr>
                            </table>
                        </div>

                        <?php
                        break;
                    default:
                        echo 'Корней нет';
                        break;
                }
                ?>
            </article>
            <!-- /Задание 2. Вычисление дискриминанта квадратного уравнения -->

            <!-- Задание 3. include как функция -->
            <article class="include">
                <h3>3. Проведите самостоятельное исследование на тему "Что возвращает оператор include, если его
                    использовать как функцию?". Используйте руководство по языку, составьте и приложите примеры,
                    иллюстрирующие ваше исследование.</h3>

                <p>Простое подключение оператора include выводит содержимое подключенного файла, то есть int(1):<br>
                    <?php var_dump(include __DIR__ . '/include.php'); ?></p>

                <p>Если включение происходит внутри функции включающего файла, тогда весь код, содержащийся во
                    включаемом файле, будет вести себя так, как будто он был определен внутри этой функции. То есть, он
                    будет в той же области видимости переменных этой функции. Исключением к этому правилу являются
                    магические константы, которые выполняются парсером перед тем, как происходит включение.</p>
                <p>Возврат файлом значения:<br>
                    <?php
                    $x = include __DIR__ . '/include_return.php';
                    var_dump($x);
                    ?>
                </p>
                <p>Конструкция include выдаст warning, если не сможет найти
                    файл: <?php include __DIR__ . '/file_does_not_exist.php'; ?></p>
            </article>
            <!-- /Задание 3. include как функция -->

            <!-- Задание 4. Угадать пол по имени -->
            <article class="gender">
                <h3>4. Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь
                    угадать по имени (null - если угадать не удалось). Вам придется самостоятельно найти нужные вам
                    строковые функции. Начните с написания тестов для функции.<br>* Работает только при вводе полного
                    имени.</h3>

                <p>Меня зовут <?php $name = 'Аристарх';
                    echo $name; ?>, и я — <?php echo gender($name); ?></p>

                <p>Меня зовут <?php $name = 'Анастасия';
                    echo $name; ?>, и я — <?php echo gender($name); ?></p>

                <p>Меня зовут <?php $name = 'Windows';
                    echo $name; ?>, и я полный — <?php echo gender($name); ?></p>
            </article>
            <!-- /Задание 4. Угадать пол по имени -->
        </section>
    </main>

<?php include __DIR__ . '/footer.php'; ?>