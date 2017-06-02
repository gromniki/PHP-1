<?php

if (isset($_FILES['fileimage'])) {
    $f = $_FILES['fileimage'];

    // создаю переменную с размером файла
    $size = 1024000;

    // В начале использовал функцию basename http://php.net/manual/ru/function.basename.php,
    // чтобы оставалось имя файла, как на компьютере пользователя, но потом понял, что она не нужна
    // и отказался от неё.
    $fupload = __DIR__ . '/img/uploads/' . $f['name'];

    $text = '';

    if (0 == $f['error']) {
        // Проверяю тип файла JPG или PNG
        if ('image/jpeg' == $f['type'] || 'image/png' == $f['type']) {
            if ($f['size'] > $size) {
                $text = 'Превышен размер файла в 1 Мб. Выберите картинку меньшего размера';
            } else {
                if ('' == $text) {
                    move_uploaded_file($f['tmp_name'], $fupload);
                    $text = 'Файл ' . $f['name'] . ' успешно загружен';
                }
            }
        } else {
            $text = 'Не правильный тип файла. Можно только JPG или PNG';
        }
    } else {
        $text = 'Вы не выбрали картинку';
    }

    echo $text;
}
