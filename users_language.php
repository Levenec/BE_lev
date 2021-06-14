<?php

$users = [
    '1' => ['name' => 'Vasyl', 'email' => 'vasyl@mail.ru', 'lang' => 'de'],
    '5' => ['name' => 'Viacheslav1', 'email' => 'alexandr@mail.ru','lang' => 'ru'],
    '9' => ['name' => 'Andriy', 'email' => 'andrii@mail.ru','lang' => 'ru'],
    '57' => ['name' => 'Andriy1', 'email' => 'nadia @mail.ru', 'lang' => 'de'],
    '3' => ['name' => 'Viacheslav', 'email' => 'viacheslav@mail.ru', 'lang' => 'de'],
    '62' => ['name' => 'Artem', 'email' => 'ann@mail.ru' , 'lang' => 'fr'],
    '18' => ['name' => 'Artem', 'email' => 'ann@mail.ru', 'lang' => 'fr'],
];

$copy_users = $users; // создаем копию массива для выборки языка
 


$fr = [ //массив языков
     'fr' => "Bonjour",
     'de' => "Hallo",
     'ru' => "Привет",
     'ua' => "Привіт"

];




$first_user = current($copy_users); // получаем первого юзера массива
$last_user = end($copy_users); //Получаем последнего юзера массива

$lng_first_user = $first_user["lang"]; //язык первого юзера
$lng_last_user = $last_user["lang"]; // язык последнего юзера

if (($fr[$lng_first_user]) == 0  ||  ($fr[$lng_last_user]) == 0 ){ // делаем проверку возможно мы не знаем китайский язык в массиве $fr
    echo 'что то пошло не так, проверь наличие языка в массиве';

}    elseif ( $first_user['lang']  == $last_user['lang']){ //если два языка совпало выводи приветсвие

    $lng = $first_user["lang"]; //если у одного  fr то и у второго тоже fr
    echo $fr[$lng] . ' ' . $first_user['name'] ;
    echo '</br>';
    echo $fr[$lng] . ' ' . $last_user['name'] ;


}else{ //выводим приветсвие на разных языках
    $lng = $first_user["lang"];
        echo $fr[$lng] . ' ' . $first_user['name'] . '<br>';
         $lng = $last_user["lang"];
         echo $fr[$lng] . ' ' . $last_user['name'];

}



