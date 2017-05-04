<?php require __DIR__ . '/header.php'; ?>

    <main class="page-main">
        <section class="container-center">
            <h1>Выполнение домашнего задания урока 2&nbsp;курса &laquo;PHP-1&raquo;</h1>

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
                        <td><?php echo (int)(0 && 0); ?></td>
                        <td><?php echo (int)(0 && 1); ?></td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td><?php echo (int)(1 && 0); ?></td>
                        <td><?php echo (int)(1 && 1); ?></td>
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
                        <td><?php echo (int)(0 || 0); ?></td>
                        <td><?php echo (int)(0 || 1); ?></td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td><?php echo (int)(1 || 0); ?></td>
                        <td><?php echo (int)(1 || 1); ?></td>
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
                        <td><?php echo (int)(0 xor 0); ?></td>
                        <td><?php echo (int)(0 xor 1); ?></td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td><?php echo (int)(1 xor 0); ?></td>
                        <td><?php echo (int)(1 xor 1); ?></td>
                    </tr>
                </table>
            </article>

            <article class="equation">
                <h3>2. Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами. Используя
                    эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод
                    решения.</h3>

                <p>Дискриминант квадратного уравнения вычисляется по формуле: D = b<sup>2</sup> - 4ac</p>

                <?php
                $a = 2;
                $b = 5;
                $c = 2;
                $D = discriminant($b, $a, $c);
                ?>

                <ul>
                    <li>a = <?php echo $a; ?></li>
                    <li>b = <?php echo $b; ?></li>
                    <li>c = <?php echo $c; ?></li>
                    <li>Дискриминант D = <?php echo $D; ?></li>
                </ul>

                <table>
                    <tr>
                        <td rowspan="2">x<sub>1,2</sub> =</td>
                        <td class="downline">-(<?php echo $b; ?>) &#177; &#8730;<span class="upline">(<?php echo $b; ?>)<sup>2</sup> - 4 &#215; <?php echo $a; ?> &#215; <?php echo $c; ?></span></td>
                        <td rowspan="2"> = </td>
                        <td class="downline">8 &#177; &#8730;<span class="upline">64 - 48</span></td>
                        <td rowspan="2"> = </td>
                        <td class="downline">8 &#177; &#8730;<span class="upline"><?php echo $D; ?></span></td>
                        <td rowspan="2"> = </td>
                        <td class="downline">8 &#177; 4</td>
                    </tr>
                    <tr class="downnumber">
                        <td>2 &#215; <?php echo $a; ?></span></td>
                        <td>6</td>
                        <td>6</td>
                        <td>6</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td rowspan="2">x<sub>1</sub> =</td>
                        <td class="downline">8 + 4</td>
                        <td rowspan="2"> = </td>
                        <td class="downline">12</td>
                        <td rowspan="2"> = 2</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>6</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td rowspan="2">x<sub>2</sub> =</td>
                        <td class="downline">8 - 4</td>
                        <td rowspan="2"> = </td>
                        <td class="downline">4</td>
                        <td rowspan="2"> = <?php echo 4 / 6; ?></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>6</td>
                        <td></td>
                    </tr>
                </table>

                <?php

                switch ($D) {
                    case ($D > 0):
                        break;
                    case ($D == 0):
                        break;
                    default:
                        break;
                }

                ?>









            </article>

            <article class="include">
                <h3>3. Проведите самостоятельное исследование на тему "Что возвращает оператор include, если его
                    использовать как функцию?". Используйте руководство по языку, составьте и приложите примеры,
                    иллюстрирующие ваше исследование.</h3>

                <p>Простое подключение оператора include выводит содержимое подключенного файла:<br>
                    <?php include __DIR__ . '/include.php'; ?></p>

                <p>Если включение происходит внутри функции включающего файла, тогда весь код, содержащийся во
                    включаемом файле, будет вести себя так, как будто он был определен внутри этой функции. То есть, он
                    будет в той же области видимости переменных этой функции. Исключением к этому правилу являются
                    магические константы, которые выполняются парсером перед тем, как происходит включение.</p>
                <p>Вывод функции с возвращенным include:<br><?php echo returnInclude(); ?></p>
                <p>В случае, когда файла нет, выводит предупреждение, что файла не
                    существует: <?php include __DIR__ . '/include_delete.php'; ?></p>
            </article>

        </section>
    </main>

<?php include __DIR__ . '/footer.php'; ?>