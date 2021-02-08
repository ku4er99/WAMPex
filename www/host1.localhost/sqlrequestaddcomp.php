<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

require_once 'connection.php'; // подключаем скрипт

if(isset($_POST['idcomp']) && isset($_POST['idowner']) && isset($_POST['CoreNum']) && isset($_POST['RAMamount']) && isset($_POST['DriveType']) && isset($_POST['VideoCardModel'])){

    $link = mysqli_connect($servername, $username, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    // экранирования символов для mysql
    $idcomp = htmlentities(mysqli_real_escape_string($link, $_POST['idcomp']));
    $idowner = htmlentities(mysqli_real_escape_string($link, $_POST['idowner']));
    $CoreNum = htmlentities(mysqli_real_escape_string($link, $_POST['CoreNum']));
    $RAMamount = htmlentities(mysqli_real_escape_string($link, $_POST['RAMamount']));
	$DriveType = htmlentities(mysqli_real_escape_string($link, $_POST['DriveType']));
    $VideoCardModel = htmlentities(mysqli_real_escape_string($link, $_POST['VideoCardModel']));	
    // создание строки запроса
    $query ="INSERT INTO computer VALUES('$idcomp','$idowner','$CoreNum','$RAMamount','$DriveType','$VideoCardModel')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}

?>
</body>
</html>