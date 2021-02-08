function Input(a){
	strArr = prompt("Введите столбцы таблицы через пробел:");
	arr = strArr.split (" ");
	addRow(a,arr);
}
function addRow(a,arr){
	var table=document.getElementsByName("table1"); 
	if (a === 0){
		var row=table[0].insertRow();  
	}
	if(a === 1) {
		var row=table[0].insertRow(0);  
	}
	var cell1=row.insertCell(0); 
	var cell2=row.insertCell(1);
	cell1.innerHTML=arr[0]; 
	cell2.innerHTML=arr[1]; 
}
function delRow(a){
	var table =  document.getElementsByName("table1");
	if (a === 1){
		table[0].deleteRow(table[0].rows.length - 1);
	}
	if (a === 0) { 
		table[0].deleteRow(0);
	}
}
            
function colorText0(e){
	var col=document.getElementsByName("color");
	col[0].style.color = "Red"; 
	}	
function colorTextReturn0(e){
	var col=document.getElementsByName("color");
	col[0].style.color = "Black"; 
	}
function colorText1(e){
	var col=document.getElementsByName("color");
	col[1].style.color = "Green"; 
	}
function colorTextReturn1(e){
	var col=document.getElementsByName("color");
	col[1].style.color = "Black"; 
	}
function colorText2(e){
	var col=document.getElementsByName("color");
	col[2].style.color = "BlueViolet"; 
	}
function colorTextReturn2(e){
	var col=document.getElementsByName("color");
	col[2].style.color = "Black"; 
	}
function colorText3(e){
	var col=document.getElementsByName("color");
	col[3].style.color = "Orange"; 
	}
function colorTextReturn3(e){
	var col=document.getElementsByName("color")
	col[3].style.color = "Black"; 
	}	