<?php
/**
 * Created by PhpStorm.
 * User: gromniki
 * Date: 20.06.2017
 * Time: 22:18
 */

class User
{
    public $sex;
    public $name;
    public $email;
    public $birthday;
}

function sendMessage (User $user, $message)
{
    echo 'Сообщение для пользователя' . $user->name . ' отправлено';
}


$user = new User;
$user->name = 'Роман';
$user->email = 'test@test.com';


sendMessage($user, 'Hello!');