<?php

	$users = [
		"5"	=>	[ "name" => "Ivan", "email" => "ivan@test.com", "lang" => "ua" ],
		"3" =>	[ "name" => "Penro", "email" => "penro@test.com", "lang" => "ru" ],
		"8" =>	[ "name" => "Oksana", "email" => "oksana@test.com", "lang" => "en"],
		"11" =>	[ "name" => "Vasyl", "email" => "vasyl@test.com", "lang" => "de"],
		"1" =>	[ "name" => "Ira", "email" => "ira@test.com", "lang" => "ru"],
		"13" =>	[ "name" => "Lena", "email" => "lena@test.com", "lang" => "en"],
		"18" =>	[ "name" => "Penro", "email" => "penro2@test.com", "lang" => "ua"],
		"14" =>	[ "name" => "Alex", "email" => "alex@test.com", "lang" => "en"],
		"22" =>	[ "name" => "Oksana", "email" => "oksana2@test.com", "lang" => "ua"],
		"10" =>	[ "name" => "Vasyl", "email" => "vasyl2@test.com", "lang" => "fr"],
		"20" =>	[ "name" => "Penro", "email" => "penro3@test.com", "lang" => "ru"],
	];
	
	$messageHello = [
		"ua" => "Привіт",
		"ru" => "Привет",
		"en" => "Hello",
		"de" => "Hallo",
		"fr" => "Bonjour"
	];
	
	
	// 1. Вивід користувачів і'мя котрих зустрічається більше одного разу
	
	$userNames = [];
	foreach($users as $value){
		if(isset($userNames[$value['name']])){
			$userNames[$value['name']]++;
		}else{
			$userNames[$value['name']] = 1;
		}
	}
	
	$userSrt = "Ім'я користувачів які зустрічаються більше одного разу:";
	$userMore = 0;
	foreach($userNames as $key => $value){
		if($value>1){
			$userSrt .= "<br>".$key." - ".$value;
			$userMore = 1;
		}
	}
	if($userMore==0){
		$userSrt .= "<br>Користувачів не знайдено.";
	}
	
	echo $userSrt;
	
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
	
?>