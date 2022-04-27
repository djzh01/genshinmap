function on() {
    document.getElementById("overlay").style.display = "block";

    var form = document.getElementById("entity");
    
    var name = form.name;
    var http = new XMLHttpRequest();
    http.open("POST", true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    http.send('name='+name);
}

function on2() {
  document.getElementById("overlay2").style.display = "block";

  var form = document.getElementById("entity");
  
  var name = form.name;
  var http = new XMLHttpRequest();
  http.open("POST", true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  
  http.send('name='+name);
}

function off2() {
    document.getElementById("overlay").style.display = "none";
    

  }
  function off2() {
    //var http = new XMLHttpRequest();
    //http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //http.send('orem=ipsum');
      document.getElementById("overlay2").style.display = "none";
      
  
    }
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
//function openNav() {
//  document.getElementById("mySidebar").style.width = "250px";
 // document.getElementById("main").style.marginLeft = "250px";
//}
var openNav = () => {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
};

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
//function closeNav() {
//  document.getElementById("mySidebar").style.width = "0";
//  document.getElementById("main").style.marginLeft = "0";
//}

var closeNav =function() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

