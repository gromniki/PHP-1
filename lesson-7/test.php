<?php
/**
 * Created by PhpStorm.
 * User: gromniki
 * Date: 20.06.2017
 * Time: 22:18
 */

class User
{
    public $gender;
    public $name;
    public $email;
    public $birthday;
}

function sendMessage (User $user, $message = null)
{
    echo $message . ', ' . $user->name;
}


$user = new User;
$user->name = 'Роман';
$user->email = 'test@test.com';


sendMessage($user, 'Hello!');