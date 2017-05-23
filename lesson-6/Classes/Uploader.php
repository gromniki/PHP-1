<?php
/**
 * Создайте класс Uploader в соответствии с требованиями:
 *  • В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
 *  • Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
 *  • Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
 */

class Uploader
{
    public function __construct($fileUser)
    {
        $this->fileUpload = $fileUser;
    }


    public function isUploaded()
    {
        //return $this->fileUser;


    }


    public $er;

    public function upload()
    {
        if (0 == $_POST['error']) {
            move_uploaded_file($_POST['tmp_name'], __DIR__ . '/img/uploads/' . $_POST['name']);
        } else {
            echo 'Вы не выбрали файл';
        }
    }
}


$uploader = new Uploader(isset($_POST['fileUser']));
//$uploader->isUploaded();
$uploader->upload();

var_dump($uploader);


//if (0 == $f['error']) {
//
//    if ('image/jpeg' == $f['type'] || 'image/png' == $f['type']) {
//        if ($f['size'] > $size) {
//            echo 'Превышен размер файла в 1 Мб. Выберите картинку меньшего размера';
//        } else {
//            move_uploaded_file($f['tmp_name'], $fupload);
//            echo 'Файл ' . $f['name'] . ' успешно загружен';
//        }
//    } else {
//        echo 'Не правильный тип файла. Можно только JPG или PNG';
//    }
//} else {
//    echo 'Вы не выбрали картинку';
//}
