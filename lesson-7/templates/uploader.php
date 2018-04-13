<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Files in Lesson-7</title>

    <link rel="stylesheet" href="/lesson-7/css/normalize.css">
    <link rel="stylesheet" href="/lesson-7/css/style.css">
</head>
<body>

<main class="page-main">
    <section class="container-center">
        <h1>Задание 2. Загрузчик файлов</h1>
        
        <!-- Задание 2. Загрузчик файлов -->
        <article>
            <form action="/lesson-7/add_image.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Загрузить картинку</legend>
                    <input type="file" name="fileImage" required>
                    <button type="submit" class="btn  btn-success">Отправить картинку</button>
                </fieldset>
            </form>
        </article>
        <!-- /Задание 2. Загрузчик файлов -->
    </section>
</main>

</body>
</html>
