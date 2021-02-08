#вывод в таблицу
import cgi, sys
form = cgi.FieldStorage()         # извлечь данные из формы
print("Content­type: text/html")  # плюс пустая строка

html1 = """
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
<table align="center" border =2> <tr>
"""
print (html1)
# печать заголовка таблицы
ll = ['Имя','Фамилия','Отчество','Да/Нет','Должность', 'Модель','Комментарий','ID сайта']
for head in ll:
    ss = '<td>'+head+'</td>'
    print ( ss)
print ('</tr> <tr>')

data = ['','','','','','','',''];    i=0
for field in ('name','sname','tname', 'yorn', 'job', 'comp', 'comment','id'):
    if not field in form:
        data[i] = '(unknown)'
    else:
        if not isinstance(form[field], list):
            data[i] = form[field].value
        else:
            values = [x.value for x in form[field]]
            data[i] = ' and '.join(values)
    i+=1

for el in data:
   print ('<td> %s </td>'% el)

print ('</tr> </table>')

with open(r"C:/Users/феникс/Desktop/site web/1-2laba/site/cgi-bin/userprof.txt", "a") as file:
    for line in data:
        file.write(line +'\n')
    file.write('---------------------------------' + '\n')
html2 = """
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
"""
print (html2)
