function on() {
  document.getElementById("overlay").style.display = "block";

  var form = document.getElementById("entity");

  var name = form.name;
  var http = new XMLHttpRequest();
  http.open("POST", true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  http.send('name=' + name);
}

function on2() {
  document.getElementById("overlay2").style.display = "block";

  var form = document.getElementById("entity");

  var name = form.name;
  var http = new XMLHttpRequest();
  http.open("POST", true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  http.send('name=' + name);
}

function on3() {
  document.getElementById("overlay3").style.display = "block";

  var form = document.getElementById("entity");

  var name = form.name;
  var http = new XMLHttpRequest();
  http.open("POST", true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  http.send('name=' + name);
}

function on4() {
  document.getElementById("overlay4").style.display = "block";

  var form = document.getElementById("entity");

  var name = form.name;
  var http = new XMLHttpRequest();
  http.open("POST", true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  http.send('name=' + name);
}

function off() {
  document.getElementById("overlay").style.display = "none";


}
function off2() {
  //var http = new XMLHttpRequest();
  //http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  //http.send('orem=ipsum');
  document.getElementById("overlay2").style.display = "none";


}
function off3() {
  //var http = new XMLHttpRequest();
  //http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  //http.send('orem=ipsum');
  document.getElementById("overlay3").style.display = "none";


}
function off4() {
  //var http = new XMLHttpRequest();
  //http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  //http.send('orem=ipsum');
  document.getElementById("overlay4").style.display = "none";


}

var openNav = (region) => {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
};

var closeNav = function () {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

