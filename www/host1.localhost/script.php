<head>
<TITLE>Таблица с анкетой</TITLE>
<style>
	#footer {
    position: fixed; /* Фиксированное положение */
    left: 0; bottom: 0; /* Левый нижний угол */
    padding: 10px; /* Поля вокруг текста */
    background: #39b54a; /* Цвет фона */
    color: #fff; /* Цвет текста */
    width: 100%; /* Ширина слоя */
</style>

</head>
<H1><p align="center" style="font-size: 120%; font-family: monospace; color: #cd66cc">Анкета пользователя</p></H1>
<center>
<?php
	foreach($_POST as $name=>$value){
		echo "$name - $value<br/><br/>";
	}
	$filename = 'answers.txt';
	$text = serialize($_POST); //сериализация
	$text2 = "<br/>";
	//записываем текст в файл
	file_put_contents($filename, $text, FILE_APPEND);
	file_put_contents($filename, $text2, FILE_APPEND);
?>

</center>
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