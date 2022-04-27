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
      <?php include 'utils/nav.php' ?>
      <?php include 'utils/sidebar.php' ?>      
    </div>
    <div id="zoom">
      <ul class="region-buttons">
        <button id="mondstadt-btn" class="btn buttonround" onclick="openNav()"><img src="images/RegionIcons/Mondstadt.png" /></button>

        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-justify"></i>
        </button>
        <!-- <li id="mondstadt-btn"><button><img src="images/RegionIcons/Mondstadt.png"/></button></li> -->
        <li id="liyue-btn"><button><img src="images/RegionIcons/Liyue.png" /></button></li>
        <li id="inazuma-btn"><button><img src="images/RegionIcons/Inazuma.png" /></button></li>
      </ul>
      <img id="zoom-img" src="images/Teyvat.jpg" alt="Teyvat" />
    </div>


  </div>

  <script src="scripts/script.js"></script>
  <script src="scripts/sidebar.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>