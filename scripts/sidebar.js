function on() {
  var buttonValue = document.getElementById('button').value;
    document.getElementById(buttonValue).style.display = "block";
}

function off() {
   var buttonValue = document.getElementById('button').value;
    document.getElementById(buttonValue).style.display = "none";
  }

function on2() {
    console.log('hi');
    document.getElementById("overlay").style.display = "block";
}

function off2() {
    document.getElementById("overlay").style.display = "none";
  }

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

