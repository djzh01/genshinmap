//https://dev.to/stackfindover/zoom-image-point-with-mouse-wheel-11n3
var scale = 1,
  min_scale = 1,
  panning = false,
  pointX = 0,
  pointY = 0,
  start = { x: 0, y: 0 },
  zoom = document.getElementById("zoom");
  navbarOffset = 56;

function scaleMap() {
  var zoom = document.getElementById("zoom");

  if (screen.height > screen.width) {
    min_scale = screen.height / screen.width * (zoom.width / zoom.height);
  }

  zoom.style.transform = "translate(0px,0px) scale(" + min_scale + ")";
  console.log(min_scale);
}
window.onload = scaleMap;

function setTransform() {
  pointX = pointX > 0 ? 0 : pointX;
  pointY = pointY > 0 ? 0 : pointY;
  scale = scale < min_scale ? min_scale : scale;

  pointX = pointX < -(zoom.width * scale - screen.width) ? -(zoom.width * scale - screen.width) : pointX;
  pointY = pointY < -(zoom.height * scale - screen.height + navbarOffset) ? -(zoom.height * scale - screen.height + navbarOffset) : pointY;

  zoom.style.transform = "translate(" + pointX + "px, " + pointY + "px) scale(" + scale + ")";
  console.log(scale);
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

// Touch Screen Controls

zoom.ontouchstart = function (e) {
  e.preventDefault();
  console.log(e.touches[0])
  start = { x: e.touches[0].clientX - pointX, y: e.touches[0].clientY - pointY };
  panning = true;
  zoom.style.cursor = 'grab';
}

zoom.ontouchend = function (e) {
  console.log('hello');

  panning = false;
  zoom.style.cursor = 'revert';

}

zoom.ontouchmove = function (e) {
  console.log('hello');

  e.preventDefault();
  if (!panning) {
    return;
  }
  pointX = (e.touches[0].clientX - start.x);
  pointY = (e.touches[0].clientY - start.y);
  setTransform();
}

// zoom.onwheel = function (e) {
//   e.preventDefault();
//   var xs = (e.clientX - pointX) / scale,
//     ys = (e.clientY - pointY) / scale,
//     delta = (e.wheelDelta ? e.wheelDelta : -e.deltaY);
//   (delta > 0) ? (scale *= 1.1) : (scale /= 1.1);
//   pointX = e.clientX - xs * scale;
//   pointY = e.clientY - ys * scale;

//   setTransform();
// }