<?php

define('ROOT_PATH' , dirname(__FILE__));
$fp = fopen( ROOT_PATH . DIRECTORY_SEPARATOR . "login.txt", "a+");

$file = file("login.txt");



for ($i = 0; $i<count($file); $i++){
    $data_user[$i] = explode(" ",$file[$i]);
}


?>


