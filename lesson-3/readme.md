index.php — файл решения домашнего задания 3 урока
image.php — файл-обработчик фотогалереи
data.php  — массив с именами картинок

---

1. Напишите программу-калькулятор
• Форма для ввода двух чисел, выбора знака операции и кнопка "равно"
• Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт, который их примет и выведет выражение и его результат
• * Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP, введенные числа останутся в input-ах, а результат появится после кнопки "равно"

2. Создайте примитивную фотогалерею из двух страниц
• Пусть на главной странице галереи выводятся 3-4 изображения
• Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер изображения
• На странице image.php вы по номеру понимаете, какое изображение вывести в браузер и выводите его. Я ожидаю,
  что для этого пункта программы вы создатите массив вида [1 => 'cat.jpg', 2=>'dog.jpg', ... ], однако вы можете предложить
  и другое решение. Кстати, этот же массив вы используете и в пункте 1 - для вывода изображений!

---

Комментарии Альберта:
https://github.com/gromniki/profIT-PHP-1/blob/master/lesson-3/index.php#L32
Ошибка. Вы допустили ситуацию деления на ноль. А еще не обрабатываете случай, когда операнд не входит в список разрешенных.
#fixed

https://github.com/gromniki/profIT-PHP-1/blob/master/lesson-3/index.php#L90
Здесь не нужны лишние переводы строк. Не разрывайте HTML-тег ими.
#fixed

https://github.com/gromniki/profIT-PHP-1/blob/master/lesson-3/index.php#L116
Будет 100 фоток - сто раз копи-паст сделаете?
#fixed

https://github.com/gromniki/profIT-PHP-1/blob/master/lesson-3/image.php#L9
Для того, чтобы найти в массиве элемент - не нужен цикл. Грубая ошибка.
#fixed