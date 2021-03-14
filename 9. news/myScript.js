//ovde su ubaci da menja vreme
var myVar = setInterval(myTimer, 1000);

function myTimer() {
var d = new Date();

var s= 59-d.getSeconds();
document.getElementById("seconds1").innerHTML = (s-(s%10))/10;
document.getElementById("seconds2").innerHTML = s%10;

var m= 59-d.getMinutes();
document.getElementById("minutes1").innerHTML = (m-(m%10))/10;
document.getElementById("minutes2").innerHTML = m%10;

var h=23-d.getHours();
document.getElementById("hours1").innerHTML = (h-(h%10))/10;
document.getElementById("hours2").innerHTML = h%10;

var day=190-d.getDate();
document.getElementById("days1").innerHTML = (day-day%100)/100;
document.getElementById("days2").innerHTML = (day%100-day%10)/10;
document.getElementById("days3").innerHTML = day%10;
}