<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

require_once 'connection.php';
if(isset($_POST['idowner']))
{   
    $link = mysqli_connect($servername, $username, $password, $database)
            or die("Ошибка " . mysqli_error($link)); 
    $idowner = htmlentities(mysqli_real_escape_string($link, $_POST['idowner']));
     
    $query ="DELETE FROM computerowner WHERE idowner = '$idowner'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные удалены</span>";
    }
	mysqli_close($link);
}
?>
</body>
</html>