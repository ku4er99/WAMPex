function Init(){
	alert("Вы выбрали генерацию массива случайными числами!");
	Solution(0);
}
function Input(){
	strArr = prompt("Введите числа через пробел:");
	A = strArr.split (" ");
	let newA = [];
	for(i in A){
		newA.push(Number(A[i]));
	}
	Solution(newA);
}
function Solution(A){
	if(A === 0){
		A = new Array();
		for(i = 0; i < 20; i++){
			A.push(Math.round(Math.random() * 30));
		}  
	}
	let aarr = document.getElementsByName("y0")
	aarr[0].innerHTML= "<b style='font-size:14;'>"+ A +"</b>"
	let B = [];
	const averageA = A.reduce((a, b) => a + b, 0) / A.length;
	for (i in A){
		if (A[i] > averageA && i % 2 == 0 ) {
			B.push(A[i]);
		}
	else {
		continue;
	}
	
	}
	let barr = document.getElementsByName("y1")
	barr[0].innerHTML = "<b style='font-size:14;'>"+ B +"</b>"
}
