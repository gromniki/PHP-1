<?php

/**
 * Создайте класс Uploader в соответствии с требованиями:
 *  • В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
 *  • Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
 *  • Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
 */
class Uploader
{
    protected $fileImage;

    public function __construct($fileImage)
    {
        $this->fileImage = $fileImage;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->fileImage])) {
            if (0 == $_FILES[$this->fileImage]['error']) {
                return true;
            }
        }

        return false;
    }

    public function upload()
    {
        move_uploaded_file($_FILES[$this->fileImage]['tmp_name'], __DIR__ . '/../img/uploads/' . $_FILES[$this->fileImage]['name']);
    }
}

