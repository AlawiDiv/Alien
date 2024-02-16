const WEEK = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];

function updateTime() {

var now = new Date(); document.getElementById("time").innerText =

zeroPadding (now.getHours(), 2) + ":"

zeroPadding (now.getMinutes(), 2) zeroPadding(now.getSeconds(), 2);

now.getFullYear() + "-"

document.getElementById("date").innerText = zeroPadding (now.getMonth() + 1, 2) WEEK[now.getDay()]; }

zeroPadding(now.getDate(), 2) +

updateTime();

setInterval(updateTime, 1000);

}



function zeroPadding (num, digit) { return String(num). padstart (digit, '0');

}