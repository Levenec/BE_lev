<?php

//// - в переменной $date лежит дата формата '31-12-2020'. Преобразуйте эту дату в формат '2020.12.31'.

$date = "31-12-2020";

$date_new = str_replace("-", ".", $date);
$date_new = explode(".", $date_new);
$date_new_reverse = array_reverse($date_new);
$date_new_reverse = implode(".", $date_new_reverse);
print_r($date_new_reverse);


echo "<br>";



////- дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'

$london = 'london is the capital of great britain';
$london =  ucwords($london);
echo $london;


////- дана переменная $password, в которой хранится пароль пользователя.
///  Если количество символов пароля больше 7 и меньше 12, то выведите пользователю сообщение о том, что пароль подходит,
///  иначе: сообщение о том, что нужно придумать другой пароль.
echo "<br>";

$password = 'levenec1';




if (iconv_strlen($password) > 7 && iconv_strlen($password)<12){
    echo "Ваш пароль принят";
} else echo "Нужно придумать другой пароль";


//дана строка с буквами и  цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры.
// В нашем случае должна получится строка 'abcbdefgh'
// Используя строковые функции сделайте следующее:

echo "<br>";

$var = '1a2b3c4b5d6e7f8g9h0';
$arr_num = [0,1,2,3,4,5,6,7,8,9];
$var_new = str_replace($arr_num, '',$var);
echo $var_new;

