<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');
restore_error_handler ();

define('ROOT_PATH' , dirname(__FILE__));
//$fp = fopen( ROOT_PATH . DIRECTORY_SEPARATOR . "login.txt", "a+");

//Создать текстовый файл, содержащий данные зарегистрированного пользователя (имя, логин, пароль, емейл, язык),
//далее создать php файл, который будет две функции: одна будет принимать имя файла и возвращать массив с
// пользователями, вторая — будет принимать логин, пароль и массив пользователей, и возвращать данные
//пользователя с указанным логином и паролем, или сообщение, если пользователь не найден.

//$file = file('login.txt');

$a= "login.txt";


function get_user_data($user_file):array { // делаем массив пользователей

    $file = file($user_file);

    for ($i=0; $i<count($file); $i++){
        $array_users[$i] = explode(" ", $file[$i]); // этот массив многомерный. каждый его элемент является подмассивом, содержащим информацию об определенном пользователе
    };

    return $array_users;

}

$arr_user_data = get_user_data($a); //массив с юзерами их txt



$login = 'lev';
$password = "333";


function filtr_user( string $login, float $password, array $arr_user_data) {

    foreach ($arr_user_data as $user){
        if  ($user[1] == $login &&  $user[2]== $password ){
            return "логин и пароль совпали с пользователем " . $user[1] . " пароль " . $user[2] ;
        }

    }

 return "Нет таких пользователей нет";

}


echo filtr_user($login,$password, $arr_user_data);
