<?php



$users = [
    '1' => ['name' => 'Vasyl', 'email' => 'vasyl@mail.ru', 'lang' => 'de'],
    '5' => ['name' => 'Viacheslav1', 'email' => 'alexandr@mail.ru','lang' => 'ru'],
    '9' => ['name' => 'Andriy1', 'email' => 'andrii@mail.ru','lang' => 'ru'],
    '57' => ['name' => 'Andriy', 'email' => 'nadia @mail.ru', 'lang' => 'de'],
    '3' => ['name' => 'Artem', 'email' => 'viacheslav@mail.ru', 'lang' => 'de'],
    '62' => ['name' => 'Artem1', 'email' => 'ann@mail.ru' , 'lang' => 'fr'],
    '18' => ['name' => 'Artem0', 'email' => 'ann@mail.ru', 'lang' => 'fr'],
];

$names = [];

foreach ($users as $name){

   if (isset($names[$name["name"]])){
       $names[$name["name"]] ++;
   }
   else  $names[$name["name"]] =1;

}

//print_r($names);

$text = "имена больше одного раза ";
$i=0;
foreach ($names as $k => $val){
    if ($val>1){

        echo $text  . $k . "<br>";
        echo "колличество одинаковых имен -" .  $val ."<br>";
        $i=1;
    }

    }
if($i==0){
    echo " повторений имен не найдено" . "<br>";
}



// 2. Створення масивів користувачів по мовах

foreach($users as $key => $value){
    $temp = "userLang".ucfirst($value['lang']);
    $$temp[$key] = $value;
}

// $userLangUa - коритсувачі з мовою UA
// $userLangRu - коритсувачі з мовою RU
// $userLangEn - коритсувачі з мовою EN
// $userLangDe - коритсувачі з мовою DE
// $userLangFr - коритсувачі з мовою FR


// 3. Масив користувачів в зворотньому порядку

$userRevers = [];
end($users);
for($i=0; $i < count($users); $i++){
    $userRevers[key($users)] = current($users);
    prev($users);
}

// $userRevers - користувачі в зворотньому порядку
