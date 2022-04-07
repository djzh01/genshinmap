<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="George Cao and Daniel Zhao">
  <meta name="description" content="Genshin Impact Archive">
  <meta name="keywords" content="Genshin Impact World Map Lore Archive Items">
  <link rel="stylesheet/less" type="text/css" href="styles/sidebar.less" />
  <link rel="stylesheet/less" type="text/css" href="styles/styles.less" />
  <link rel="stylesheet/less" type="text/css" href="styles/map.less" />
  <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Teyvationary</title>
</head>

<body>

  <div id="map">
    <div class="pos-f-t">
      <nav style="z-index: 10;" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-1" href="#">TEYVAT MAP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav w-100">
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Teyvat
              </a>
              <ul id="teyvatDropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="teyvat.html">
                    <img src="images/Elements/Anemo.png" alt="Anemo Symbol">
                    Mondstadt
                    <img src="images/RegionIcons/Mondstadt.png" alt="Mondstadt">
                  </a></li>
                <li><a class="dropdown-item" href="teyvat.html">
                    <img src="images/Elements/Geo.png" alt="Geo Symbol">
                    Liyue
                    <img src="images/RegionIcons/Liyue.png" alt="Liyue">
                  </a></li>
                <li><a class="dropdown-item" href="teyvat.html">
                    <img src="images/Elements/Electro.png" alt="Electro Symbol">
                    Inazuma
                    <img src="images/RegionIcons/Inazuma.png" alt="Inazuma">
                  </a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="enkanomiya.html">Enkanomiya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Three Realms Gateway</a>
            </li>
            <li id="profile" class="nav-item">
              <a class="nav-link" href="profile.php">
                <div class="d-flex align-items-center">
                  <span>
                    My Profile
                  </span>

                  <img class="rounded-circle"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Profile picture">
                </div>
              </a>
            </li>
          </ul>
        </div>

      </nav>

    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <li>
        <div id="overlay" onclick="off()">
            <br>
            <iframe src="./Characters.php" onload="this.width=window.innerWidth*0.8;this.height=window.innerHeight*0.8;" class="mt-5"></iframe>
        </div>
        <div id="overlay"></div>
        
        <button onclick="on()" type="submit">Dilucc</button>

      </li>
      <li>
        <div id="overlay" onclick="off()">
            <br>
            <iframe src="./profile.html" onload="this.width=window.innerWidth*0.8;this.height=window.innerHeight*0.8;" class="mt-5"></iframe>
        </div>
        <div id="overlay"></div>
                        
        <button onclick="on()">Turn on overlay effect</button>
    </li>
    </div>
    
    
    </div>
    <div id="zoom">
      <ul class="region-buttons">
        <button id="mondstadt-btn" class="btn buttonround" onclick="openNav()"><img src="images/RegionIcons/Mondstadt.png"/></button>
  
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
        <!-- <li id="mondstadt-btn"><button><img src="images/RegionIcons/Mondstadt.png"/></button></li> -->
        <li id="liyue-btn"><button><img src="images/RegionIcons/Liyue.png"/></button></li>
        <li id="inazuma-btn"><button><img src="images/RegionIcons/Inazuma.png"/></button></li>
      </ul>
      <img id="zoom-img" src="images/teyvatmap.png" alt="Teyvat" />
    </div>
    

  </div>

  <script src="scripts/script.js"></script>
  <script src="scripts/sidebar.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>