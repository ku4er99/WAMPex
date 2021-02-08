<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

require_once 'connection.php';
if(isset($_POST['idcomp']))
{   
    $link = mysqli_connect($servername, $username, $password, $database)
            or die("Ошибка " . mysqli_error($link)); 
    $idcomp = htmlentities(mysqli_real_escape_string($link, $_POST['idcomp']));
     
    $query ="DELETE FROM computer WHERE idcomp = '$idcomp'";
 
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