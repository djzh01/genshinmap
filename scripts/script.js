//https://dev.to/stackfindover/zoom-image-point-with-mouse-wheel-11n3
// Authors: George Cao and Daniel Zhao

var scale = 1,
  min_scale = 1,
  panning = false,
  pointX = 0,
  pointY = 0,
  start = { x: 0, y: 0 },
  backdrop = document.getElementById("zoom");
  img = document.getElementById("zoom-img");
  navbarOffset = 56;
  mouseDown = false;

function scaleMap() {
  // var zoom = document.getElementById("zoom");

  if (window.innerHeight > window.innerWidth) {
    min_scale = window.innerHeight / window.innerWidth * (img.width / img.height);
  }

  backdrop.style.transform = "translate(0px,0px) scale(" + min_scale + ")";
  console.log(min_scale);
}
window.onload = scaleMap;

function setTransform() {
  pointX = pointX > 0 ? 0 : pointX;
  pointY = pointY > 0 ? 0 : pointY;
  scale = scale < min_scale ? min_scale : scale;

  pointX = pointX < -(img.width * scale - window.innerWidth) ? -(img.width * scale - window.innerWidth) : pointX;
  pointY = pointY < -(img.height * scale - window.innerHeight + navbarOffset) ? -(img.height * scale - window.innerHeight + navbarOffset) : pointY;

  backdrop.style.transform = "translate(" + pointX + "px, " + pointY + "px) scale(" + scale + ")";
  console.log(scale);
}

window.onresize = function (e) {
  // console.log("window resized");
  scale = 1;
  scaleMap(); //reset the map scale to fit the new window size automatically
}

backdrop.onmousedown = function (e) {
  e.preventDefault();
  mouseDown = true;
  start = { x: e.clientX - pointX, y: e.clientY - pointY };
  panning = true;
  backdrop.style.cursor = 'grab';
}

backdrop.onmouseup = function (e) {
  mouseDown = false;
  panning = false;
  backdrop.style.cursor = 'revert';
}

backdrop.onmousemove = function (e) {
  e.preventDefault();
  if (!panning) {
    return;
  }
  if(mouseDown){
    pointX = (e.clientX - start.x);
    pointY = (e.clientY - start.y);
    setTransform();
  }
  console.log(e.clientX, e.clientY);
}

backdrop.onmouseout = function (e) {
  if(mouseDown){
    panning = false;
    backdrop.style.cursor = 'revert';
  }
}

backdrop.onwheel = function (e) {

  e.preventDefault();
  var xs = (e.clientX - pointX) / scale,
    ys = (e.clientY - pointY) / scale,
    delta = (e.wheelDelta ? e.wheelDelta : -e.deltaY);
  (delta > 0) ? (scale *= 1.1) : (scale /= 1.1);
  pointX = e.clientX - xs * scale;
  pointY = e.clientY - ys * scale;

  setTransform();
}

// Touch Screen Controls

backdrop.ontouchstart = function (e) {
  e.preventDefault();
  console.log(e.touches[0])
  start = { x: e.touches[0].clientX - pointX, y: e.touches[0].clientY - pointY };
  panning = true;
}

backdrop.ontouchend = function (e) {

  panning = false;

}

backdrop.ontouchmove = function (e) {

  e.preventDefault();
  if (!panning) {
    return;
  }
  pointX = (e.touches[0].clientX - start.x);
  pointY = (e.touches[0].clientY - start.y);
  setTransform();
}