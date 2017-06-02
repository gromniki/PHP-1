<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homeworks of PHP-1 Lesson-4</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<main class="page-main">
    <section class="container-center">
        <!-- Задание 2. Загрузка файлов от пользователя -->
        <article class="upload-images">
            <h3>2. Загрузка файлов от пользователя</h3>

            <form action="/upload.php" method="post" enctype="multipart/form-data">
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

</body>
</html>