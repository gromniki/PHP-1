<?php require __DIR__ . '/header.php'; ?>

    <main class="page-main">
        <section class="container-center">
            <h1>Выполнение домашнего задания урока 2&nbsp;курса &laquo;PHP-1&raquo;</h1>
            <p></p>

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

            </article>

        </section>
    </main>

<?php include __DIR__ . '/footer.php'; ?>