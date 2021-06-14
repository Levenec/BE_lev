<?php

$name = "Имя";
$mail = "ivanov@mail.ru";
$login = "Ваш логин";
$password = "Пароль";

$langv=[

        "EN"=> "English",
        "RU" => "Русский",
        "UA" => "Український"

];

print_r($langv);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="rega.php" method="post">

    <input name="name" value="<?php echo $name ?>" type="text">
    <input name="mail" value="<?php echo $mail ?>" type="text">
    <input name= "login" value="<?php echo $login ?>" type="text">
    <input name="password" value="<?php echo $password ?>" type="password" placeholder="Введите ваш пароль">

    <select name="select"> выберите язык <!--Supplement an id here instead of using 'name'-->
        <option selected="selected" disabled="disabled">Выбрать язык</option>
        <option value="EN"><?php echo $langv['EN'] ?></option>
        <option value="RU" ><?php echo $langv['RU'] ?></option>
        <option value="UA"><?php echo $langv['UA'] ?></option>
    </select>
<button type="submit">Отправить</button>
</form>


<?php // $name = $_POST;



//if ($_POST["select"] == "EN"){
//    echo "Вы выбрали Английский язык ";
//}



?>
</body>
</html>
