var btns = document.getElementById("region-buttons").children;
var sidebar = document.getElementById("sidebar");

Array.from(btns).forEach(btn => {
    btn.addEventListener('click', function (){
        if(sidebar.classList.contains('active')) sidebar.classList.remove('active');
        else sidebar.classList.add('active');
    });
});
