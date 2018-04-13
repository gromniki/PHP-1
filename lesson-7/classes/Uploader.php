<?php

/*
 * Создайте класс Uploader в соответствии с требованиями:
 *  • В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
 *  • Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
 *  • Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
 */

class Uploader
{
    protected $fileImage;
    protected $types = ['image/jpeg', 'image/png'];
    protected $path = __DIR__ . '/../img/uploads/';

    public function __construct($fileImage)
    {
        $this->fileImage = $fileImage;
    }

    protected function isUploaded()
    {
        $img = $_FILES[$this->fileImage];
        return isset($img) && 0 === $img['error'] && in_array($img['type'], $this->types, true);
    }

    public function upload()
    {
        //var_dump($_FILES);
        $img = $_FILES[$this->fileImage];

        if (true === $this->isUploaded()) {
            $filename = $img['name'];
            $i = 1;
            while (file_exists($this->path . $filename)) {
                $filename = $i . '-' . $img['name'];
                $i++;
            }
            return move_uploaded_file($img['tmp_name'], $this->path . $filename);
        }
        return false;
    }
}

