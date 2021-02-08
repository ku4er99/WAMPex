<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

require_once 'connection.php'; // подключаем скрипт
 
  /* ОБНОВЛЕНИЕ ДАННЫХ В ДБ   
	$link = mysqli_connect($servername, $username, $password, $database) 
		or die("Ошибка " . mysqli_error($link));
// запрос POST 
if(isset($_POST['idowner']) && isset($_POST['FName']) && isset($_POST['SName']) && isset($_POST['TName']) && isset($_POST['Age']) && isset($_POST['Profession'])){
 
    $idowner = htmlentities(mysqli_real_escape_string($link, $_POST['idowner']));
    $FName = htmlentities(mysqli_real_escape_string($link, $_POST['FName']));
    $SName = htmlentities(mysqli_real_escape_string($link, $_POST['SName']));
	$TName = htmlentities(mysqli_real_escape_string($link, $_POST['TName']));
	$Age = htmlentities(mysqli_real_escape_string($link, $_POST['Age']));
	$Profession = htmlentities(mysqli_real_escape_string($link, $_POST['Profession']));
     
    $query ="UPDATE computerowner SET FName='$FName', SName='$SName', TName='$TName', Age='$Age', Profession='$Profession' WHERE idowner='$idowner'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}
// закрываем подключение
mysqli_close($link);
*/

// ДОБАВЛЕНИЕ ДАННЫХ В ДБ
// запрос POST 
if(isset($_POST['idowner']) && isset($_POST['FName']) && isset($_POST['SName']) && isset($_POST['TName']) && isset($_POST['Age']) && isset($_POST['Profession'])){

    $link = mysqli_connect($servername, $username, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    // экранирования символов для mysql
    $idowner = htmlentities(mysqli_real_escape_string($link, $_POST['idowner']));
    $FName = htmlentities(mysqli_real_escape_string($link, $_POST['FName']));
    $SName = htmlentities(mysqli_real_escape_string($link, $_POST['SName']));
    $TName = htmlentities(mysqli_real_escape_string($link, $_POST['TName']));
	$Age = htmlentities(mysqli_real_escape_string($link, $_POST['Age']));
    $Profession = htmlentities(mysqli_real_escape_string($link, $_POST['Profession']));	
    // создание строки запроса
    $query ="INSERT INTO computerowner VALUES('$idowner','$FName','$SName','$TName','$Age','$Profession')";
     
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