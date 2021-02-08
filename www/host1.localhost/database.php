<head>
<TITLE>База данных</TITLE>
<style>
	#footer {
    position: fixed; /* Фиксированное положение */
    left: 0; bottom: 0; /* Левый нижний угол */
    padding: 10px; /* Поля вокруг текста */
    background: #39b54a; /* Цвет фона */
    color: #fff; /* Цвет текста */
    width: 100%; /* Ширина слоя */
}
	#table-box3 {
	width: 1000px;
}
	#table-box2 {
	border: 4px double black;
	height: 400px;
	overflow: scroll;
	width: 1000px;
	border-style: groove;
	table-layout: fixed;
	border-color: #7B68EE;
}
	TH {
    border: 1px solid black; /* Параметры рамки */
}
</style>
</head>
<body>
<H1><p align="center" style="font-size: 120%; font-family: monospace; color: #cd66cc">Вывод и изменение базы данных</p></H1>
<hr>
<center>
<div id="table-box3">
<table>
<tr>
<td>
<form align="left" id="forma2" method="POST" action="sqlrequestaddowner.php">
	<h3>Введите данные в табл. computerowner </h3>
	<p><table>
		<tr>
			<th align=right>ID владельца:
			<td><input type=int name=idowner>
		<tr>
			<th align=right>Имя:
			<td><input type=text name=FName>
		<tr>
			<th align=right>Фамилия:
			<td><input type=text name=SName>
		<tr>
			<th align=right>Отчество:
			<td><input type=text name=TName>
		<tr>
			<th align=right>Возраст:
			<td><input type=int name=Age>
		<tr>
			<th align=right>Профессия:
			<td><input type=text name=Profession>
        <TR>
            <TD colspan=2 align=center>
            <input type=submit value="ДОБАВИТЬ">	
	</table>
</form>
</td>
<td>
	<form align="right" id="forma3" method="POST" action="sqlrequestaddcomp.php">
	<h3 align=right>Введите данные в табл. computer</h3>
	<p><table>
		<tr>
			<th align=right>ID компьютера:
			<td><input type=int name=idcomp>
		<tr>
			<th align=right>ID владельца:
			<td><input type=int name=idowner>
		<tr>
			<th align=right>Кол-во ядер:
			<td><input type=int name=CoreNum>
		<tr>
			<th align=right>Кол-во RAM (мб):
			<td><input type=int name=RAMamount>
		<tr>
			<th align=right>Тип жесткого диска:
			<td><input type=text name=DriveType>
		<tr>
			<th align=right>Модель видеокарты:
			<td><input type=text name=VideoCardModel>
        <tr>
            <TD colspan=2 align=center>
            <input type=submit value="ДОБАВИТЬ">	
	</table>
</td>
</center>
</tr>
</table>
</div>
</form>
<hr>
<table>
<tr>
<div id="thcss">
<th align="center">
<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($servername, $username, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
	
$query ="SELECT * FROM computerowner";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    
    echo "<div id='table-box2'><table><caption> <b> COMPUTEROWNER </b></caption><tr><th>ID владельца</th><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Возраст</th><th>Профессия</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table></div></div>";
     
;
}
 
mysqli_close($link);
?>
</th>
<div id="thcss">
<th align="center">
<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($servername, $username, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
	
$query ="SELECT * FROM computer";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<div id='table-box2'><table><caption> <b> COMPUTER </b></caption><tr><th>ID компьютера</th><th>ID владельца</th><th>Кол-во ядер</th><th>Кол-во RAM</th><th>Тип жесткого диска</th><th>Модель видеокарты</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table></div></div>";

}
 
mysqli_close($link);
?>
</th>
</tr>
</table>
<hr>
<table>	
<th align="center">		
<form align="left" id="forma2" method="POST" action="sqlrequestdelowner.php">
	<h3>Введите ID владельца для удаления </h3>
	<p><table>
		<tr>
			<th align=right>ID владельца:
			<td><input type=int name=idowner>

        <tr>
            <TD colspan=2 align=center>
            <input type=submit value="УДАЛИТЬ">	
	</table>
</form>
</th>
<th align="center">		
<form align="left" id="forma2" method="POST" action="sqlrequestdelcomp.php">
	<h3>Введите ID компьютера для удаления </h3>
	<p><table>
		<tr>
			<th align=right>ID компьютера:
			<td><input type=int name=idcomp>

        <tr>
            <TD colspan=2 align=center>
            <input type=submit value="УДАЛИТЬ">	
	</table>
</form>
</th>
</table>
<div id="footer">
<ul>
<center>
<a href="localhost:80\pon.html"> Понятие суперкомпьютера </a> <br>
<a href="localhost:80\prim.html"> Применения </a><br>
<a href="localhost:80\home.html"> На главную </a><br>
</center>
</ul>
&copy; Кучеренко О. В.
</div>
</body>
</html>