function time(){
now = new Date();
let hours=now.getHours();
let mins=now.getMinutes();
let secs=now.getSeconds();
let time12=document.getElementsByName("time1");
time12.innerHTML = hours + " часов " + mins + " минут " + secs + " секунд ";
}