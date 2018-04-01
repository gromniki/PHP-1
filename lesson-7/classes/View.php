<?php

/*
Создайте объект класса View, удовлетворяющий следующим требованиям:
   • Конструктор не имеет аргументов (а может быть вообще не нужен никакой конструктор)
   • Есть метод assign($name, $value), чья задача - сохранить данные, передаваемые в шаблон по заданному имени (используйте защищенное свойство - массив для хранения этих данных)
   • Есть метод display($template), который отображает указанный шаблон с заранее сохраненными данными
   • * Метод render($template), который аналогичен методу display(), но не выводит шаблон с данными в браузер, а возвращает его
*/

class View
{
    protected $data = [];

    public function assign(string $name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    public function display(string $template)
    {
        echo $this->render($template);
    }

    public function render(string $template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}
