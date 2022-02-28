//https://dev.to/stackfindover/zoom-image-point-with-mouse-wheel-11n3
var scale = 1,
  panning = false,
  pointX = 0,
  pointY = 0,
  start = { x: 0, y: 0 },
  zoom = document.getElementById("zoom");

console.log(zoom.height);
console.log(screen.height);
function setTransform() {
  pointX = pointX > 0 ? 0:pointX;
  pointY = pointY > 0 ? 0:pointY;
  scale = scale < 1 ? 1 : scale;
  rightoffset = 10;
  pointX = pointX < -(zoom.width * scale - screen.width) ? -(zoom.width * scale - screen.width) : pointX;
  pointY = pointY < -(zoom.height * scale - screen.height) ? -(zoom.height * scale - screen.height) : pointY;
  zoom.style.transform = "translate(" + pointX + "px, " + pointY + "px) scale(" + scale + ")";
}

zoom.onmousedown = function (e) {
  e.preventDefault();
  start = { x: e.clientX - pointX, y: e.clientY - pointY };
  panning = true;
  zoom.style.cursor = 'grab';
}

zoom.onmouseup = function (e) {
  panning = false;
  zoom.style.cursor = 'revert';

}

zoom.onmousemove = function (e) {
  e.preventDefault();
  if (!panning) {
    return;
  }
  pointX = (e.clientX - start.x);
  pointY = (e.clientY - start.y);
  setTransform();
}

zoom.onwheel = function (e) {
  e.preventDefault();
  var xs = (e.clientX - pointX) / scale,
    ys = (e.clientY - pointY) / scale,
    delta = (e.wheelDelta ? e.wheelDelta : -e.deltaY);
  (delta > 0) ? (scale *= 1.1) : (scale /= 1.1);
  pointX = e.clientX - xs * scale;
  pointY = e.clientY - ys * scale;
  
  setTransform();
}