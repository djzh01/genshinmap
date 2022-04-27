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
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Teyvationary</title>
  <script type=text/javascript>
    $(document).ready(function(e) {
      console.log($(".region-buttons button"));
      $(".region-buttons button").each(function() {
        $(this).click(function(e) {
            var region = $(this).val();
            
        });
      });
    });
  </script>
</head>

<body>

  <div id="map">
    <div class="pos-f-t">
      <?php include 'utils/nav.php' ?>
      <?php include 'utils/sidebar.php' ?>
    </div>
    <div id="zoom">
      <ul class="region-buttons">
        <li>
          <button id="mondstadt-btn" class="btn buttonround" onclick="openNav('Mondstadt')" value="Mondstadt"><img src="images/RegionIcons/Mondstadt.png" /></button>
        </li>
        <li>
          <button id="liyue-btn" class="btn buttonround" value="Liyue"><img src="images/RegionIcons/Liyue.png" /></button>
        </li>
        <li>
          <button id="inazuma-btn" class="btn buttonround" value="Inazuma"><img src="images/RegionIcons/Inazuma.png" /></button>
        </li>
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