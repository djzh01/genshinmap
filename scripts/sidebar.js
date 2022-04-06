function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}


var btns = document.getElementById("region-buttons").children;
var sidebar = document.getElementById("sidebar");
console.log(btns);
Array.from(btns).forEach(btn => {
    console.log(btn);
    btn.addEventListener('click', function (){
        if(sidebar.classList.contains('active')) sidebar.classList.remove('active');
        else sidebar.classList.add('active');
    });
});
btns.onclick = function (e) {
    console.log('click');
}