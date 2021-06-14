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
$cycle_users = $users; // мыссив для задания с циклами


//1. Общее количество пользователей сайта
$count_Users = count($users);
print_r($count_Users);


$array_key = array_keys($users); //забераем ключи массива в данном случае ID

$hight_to_low = $users;
krsort($hight_to_low); // сортируем  пользователей по убыванию


echo "<pre>";

print_r($hight_to_low); // вывели пользователей по убыванию
echo "</pre>";

$max_user = $users[max($array_key)];//вывели максимальный Id
$min_user = $users[min($array_key)];//вывели мин Id
echo "<pre>";
print_r($max_user);
echo "максимальный юзер";
echo "</pre>";

echo "<pre>";

print_r($min_user);
echo "минимальный юзер";
echo "</pre>";



ksort($users);
$next_min = next($users);
//print_r($users);

echo "<pre>";
print_r($next_min);
echo "перед минимальным";
echo "</pre>";

krsort($users);
$prev_top = next($users);
//print_r($users);

echo "<pre>";

print_r($prev_top);
echo "второй после максимального";
echo "</pre>";




$del_min_usr = $users;
$min_id = min($array_key);//выяснили кого удалить в данном случае пользователя с минимальным айди


unset($del_min_usr[$min_id]); //удалили минимальный id
echo "<hr>";
echo "<pre>";
print_r($del_min_usr);
echo "</pre>";

echo "<hr>";



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





//$elementCount=array();
//
//
//    for ($i = 0; $i< count($result); $i++){
//        $key=$result[$i];
//        print_r($elementCount[$key]);
//
//        if($elementCount[$key]>=1){
//            $elementCount[$key]++;
//        } else  {
//            $elementCount[$key]=1;
//        }
//    }
//
//echo "<pre>";
//print_r($elementCount);



//
//foreach (array_count_values($result) as $item => $val  ) {
//
//    if ( $val > 1 ) $names[] = $item ;
//
//}
//echo "<pre>";
//print_r($names);
//
//echo "</pre>";

