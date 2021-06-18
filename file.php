<?php

//считывать содержимое файла и проверять правильно ли пользователь ввел логин и пароль,
//в случае правильного ввода вывести логин на экран и так же создать новый файл или перезаписать
//значение в существующем,
//используя логин в качестве имени файла, в этот файл заносить число правильных попыток входа для
//данного пользователя.
define('ROOT_PATH' , dirname(__FILE__));
$fp = fopen( ROOT_PATH . DIRECTORY_SEPARATOR . "login.txt", "a+");
$login = $_POST['login'];
$password=$_POST['password']; //это вы получите из $_POST, например

$file=file("login.txt"); //массив $file содержит элементы, каждый из которых соответствует определенному пользователю


for ($i=0; $i<count($file); $i++){
    $users[$i] = explode(" ", $file[$i]); // этот массив многомерный. каждый его элемент является подмассивом, содержащим информацию об определенном пользователе


};

foreach ($users as $user => $k) {

    if ($k[1]  == $password && $k[0]  == $login){
        echo "<p>Пароль  соответствует пользователю " . $k[0] . "<br>" ;


        $name = $k[0];

       if (!file_exists($name .".txt")){
           $file_user = fopen($k[0].".txt","w");
           echo "создан лог файла";
//           file_put_contents($name.".txt","1");


       }elseif  (file_exists($name .".txt")){


           $data_file = file_get_contents ($name .".txt");
           $string = preg_replace('/[^0-9]/i', ' ', $data_file);

           $string ++;
          $data_write = "Пользователь " . $name ." имеет " . $string . " успешных авторизаций";


        file_put_contents($name.".txt",$data_write);
           echo $data_write;

       }



    }

    if ( $k[1]  != $password && $k[0]  == $login){ //неправильный пароль



        if (!file_exists($k[0]."_denied.txt")){
            $file_user = fopen($k[0]."_denied.txt","w");
            echo "создан лог файла блокировки";
            file_put_contents($k[0]."_denied.txt",'1');




        }

        elseif ( file_exists($k[0]."_denied.txt")){
            $denied_file  = file_get_contents($k[0]."_denied.txt");
            $denied = preg_replace('/[^0-9]/i', ' ', $denied_file); //количестов не правильного ввода
            $denied ++;
            $blok =3; // количевство попыток авторизации
            $attempt = $blok - $denied;
            file_put_contents($k[0]."_denied.txt",$denied);
            echo ' У вас осталось ' . $attempt . ' попытки до блокировки ' ."<br>";



            if ($attempt <= 0 ){

                $unblock_time = date('H:i',strtotime(' + 200 min'));

                echo "Вас заблокировано, Вы можете попробовать еще раз через 20 мин в " . $unblock_time;
            }

        }

    }

}


fclose($fp);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,?:"?"\
    ;'maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


<form action="file.php" method="post">

    <input type="text" name="login" placeholder="name">

    <input type="text" name="password" placeholder="password">

    <button type="submit">отправить</button>


<!---->
<!--</form>-->

</body>
</html>