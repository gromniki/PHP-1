<?php

require __DIR__ . '/header.php';

if (isset($_FILES['fileimage'])) {
    $f = $_FILES['fileimage'];

    // создаю переменную с размером файла
    $size = 1024000;

    // В начале использовал функцию basename http://php.net/manual/ru/function.basename.php,
    // чтобы оставалось имя файла, как на компьютере пользователя, но потом понял, что она не нужна
    // и отказался от неё.
    $fupload = __DIR__ . '/img/uploads/' . $f['name'];


    if (0 == $f['error']) {
        // Проверяю тип файла JPG или PNG
        if ('image/jpeg' == $f['type'] || 'image/png' == $f['type']) {
            if ($f['size'] > $size) {
                echo 'Превышен размер файла в 1 Мб. Выберите картинку меньшего размера';
            } else {
                move_uploaded_file($f['tmp_name'], $fupload);
                echo 'Файл ' . $f['name'] . ' успешно загружен';
            }
        } else {
            echo 'Не правильный тип файла. Можно только JPG или PNG';
        }
    } else {
        echo 'Вы не выбрали картинку';
    }
}

?>

    <main class="page-main">
        <section class="container-center">
            <h1>Выполнение домашнего задания урока 4&nbsp;курса &laquo;PHP-1&raquo;</h1>
            <!-- Задание 1. Гостевая книга -->
            <article class="guestbook">
                <h3>1. Алгоритм создания гостевой книги<br>
                    <ul class="markers-list">
                        <li>Создайте текстовый файл, в котором будут находиться записи гостевой. Одна строка - одна
                            запись. Заполните файл 2-3 записями.
                        </li>
                        <li>Напишите функцию, которая будет читать этот файл и возвращать массив записей гостевой
                            книги
                        </li>
                        <li>Сделайте страницу, где гостевая книга будет отображаться. Используйте функцию из пункта 2
                        </li>
                        <li>В конце страницы сделайте форму для добавления новой записи в гостевую книгу.</li>
                        <li>Скрипт-обработчик, приняв данные из формы пункта 4, должен получить массив уже имеющихся
                            записей гостевой, добавить к этому массиву новый элемент (текст из формы) и записать
                            полученный массив в тот же файл, разделяя элементы символом переноса строки
                        </li>
                        <li>* После окончания своей работы скрипт из пункта 5 должен перенаправить клиента на главную
                            страницу гостевой книги
                        </li>
                    </ul>
                </h3>

                <!-- Вывод комментариев -->
                <?php
                foreach (readFiles(__DIR__ . '/data/comments.txt') as $comment) {
                    ?>
                    <p><?php echo $comment; ?></p>
                    <hr>
                    <?php
                }
                ?>
                <!-- /Вывод комментариев -->

                <!-- Форма добавления комментария -->
                <form action="/add.php" method="post">
                    <fieldset>
                        <legend>Добавить комментарий</legend>
                        <textarea class="fullsize" name="comment" id="" cols="30" rows="4"
                                  placeholder="Ваш комментарий"></textarea>
                        <button type="submit" class="btn btn-success">Добавить комментарий</button>
                    </fieldset>
                </form>
                <!-- /Форма добавления комментария -->
            </article>
            <!-- /Задание 1. Гостевая книга -->

            <!-- Задание 2. Загрузка файлов от пользователя -->
            <article class="upload-images">
                <h3>2. Загрузка файлов от пользователя<br>
                    <ul class="markers-list">
                        <li>Решите задачу загрузки файла от пользователя в заданное место на сервере с тем же именем
                            файла, что он имел на компьютере пользователя.
                        </li>
                        <li>* Решите задачу ограничения загрузки, например - только файлов JPEG и PNG</li>
                    </ul>
                </h3>

                <form action="/lesson-4.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Загрузить картинку</legend>
                        <input type="file" name="fileimage">
                        <button type="submit" class="btn btn-success">Отправить картинку</button>
                    </fieldset>
                </form>
            </article>
            <!-- /Задание 2. Загрузка файлов от пользователя -->
        </section>
    </main>

<?php require __DIR__ . '/footer.php'; ?>