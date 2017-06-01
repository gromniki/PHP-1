<?php

$images = require  __DIR__ . '/data.php';

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

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homeworks of PHP-1</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<main class="page-main">
    <section class="container-center">
        <h1>Выполнение домашнего задания урока 3&nbsp;курса &laquo;PHP-1&raquo;</h1>

        <!-- Задание 1. Программа-калькулятор -->
        <article class="calculator">
            <h3>Программа-калькулятор</h3>

            <form class="form-inline" action="/index.php" method="get">
                <fieldset>
                    <legend>Простой калькулятор</legend>
                    <input class="form-control" type="number" name="number1" placeholder="Число 1"
                           value="<?php echo $num1; ?>">
                    <select class="form-control" name="arithmetic">
                        <?php
                        foreach ($operandArr as $oper) {
                            ?>

                            <option value="<?php echo $oper; ?>"
                                    <?php if ($operand == $oper) { ?>selected<?php } ?>><?php echo $oper; ?></option>

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
            <h3>Примитивная фотогалерея</h3>

            <div class="gallery__list">
                <?php
                foreach ($images as $key => $image) {
                    ?>
                    <a href="/image.php?id=<?php echo $key; ?>">
                        <img src="/img/<?php echo $image; ?>" width="290" alt="<?php echo $image; ?>">
                    </a>
                    <?php
                }
                ?>
            </div>
        </article>
        <!-- /Задание 2. Фотогалерея -->
    </section>
</main>

</body>
</html>