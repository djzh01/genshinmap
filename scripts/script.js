//https://dev.to/stackfindover/zoom-image-point-with-mouse-wheel-11n3
var scale = 1,
  panning = false,
  pointX = 0,
  pointY = 0,
  start = { x: 0, y: 0 },
  zoom = document.getElementById("zoom");

function setTransform() {
  pointX = pointX > 0 ? 0:pointX;
  pointY = pointY > 0 ? 0:pointY;
  scale = scale < 1 ? 1 : scale;
  rightoffset = 10;
  pointX = pointX < -(screen.width * scale - screen.width) ? -(screen.width * scale - screen.width)+rightoffset : pointX;
  pointY = pointY < -(screen.height * scale - screen.height) ? -(screen.height * scale - screen.height)+rightoffset : pointY;
  zoom.style.transform = "translate(" + pointX + "px, " + pointY + "px) scale(" + scale + ")";
}

zoom.onmousedown = function (e) {
  e.preventDefault();
  start = { x: e.clientX - pointX, y: e.clientY - pointY };
  panning = true;
}

zoom.onmouseup = function (e) {
  panning = false;
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
  (delta > 0) ? (scale *= 1.2) : (scale /= 1.2);
  pointX = e.clientX - xs * scale;
  pointY = e.clientY - ys * scale;
  
  setTransform();
}