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
        return isset($_FILES[$this->fileImage]) && 0 === $_FILES[$this->fileImage]['error'] && in_array($_FILES[$this->fileImage]['type'], $this->types, true);
    }

    public function upload()
    {

        if (true === $this->isUploaded()) {

            $filename = $_FILES[$this->fileImage]['name'];
            $i = 1;

            while (file_exists($this->path . $filename)) {
                $filename = $i . '-' . $_FILES[$this->fileImage]['name'];
                $i++;
            }

            return move_uploaded_file($_FILES[$this->fileImage]['tmp_name'], $this->path . $filename);
        }

        return false;
    }
}

