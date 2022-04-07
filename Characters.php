<?php
        include("Database.php");
        session_start();
        
        $db = new Database();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="George Cao and Daniel Zhao">
    <meta name="description" content="Genshin Impact Archive">
    <meta name="keywords" content="Genshin Impact World Map Lore Archive Items">
    <link rel="stylesheet/less" type="text/css" href="./styles/styles.less" />
    <link rel="stylesheet/less" type="text/css" href="./styles/profile.less" />

    <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Teyvationary</title>
</head>

<body>
<?php

$data = $db->query("select * from genshin_characters where name = 'Diluc'");
if ($data) {
    echo $data[0]['normalgif'];
}
else{
    echo "rip";
}
?>


    <div class="container rounded bg-white mt-5 mb-5">
        <h1 style="text-align: center; " class="center"><?php echo $data[0]['name']?></h1>
        
        <h2 style="text-align: center; font-style: italic; font-family: 'Courier New', monospace; " class="center"><?php echo $data[0]['quote']?></h2>
        <div class="row">
            <div class="col-md-8 offset-md-3">
                <a href="#">
                    <img src="<?php echo $data[0]['picture']?>"
                        alt="bookmark" style="border-radius: 50%; height: 50vh; width: 35vw"/>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 offset-md-4">
                <audio controls>
                    <source src="<?php echo $data[0]['voice']?>" type="audio/mpeg">
                </audio>
            </div>
        </div>
      
        
        <hr>  

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <video width = 100% autoplay loop>
            <source src="<?php echo $data[0]['normalgif']?>" type="video/ogg">
        </video> 
      <div class="carousel-caption d-none d-md-block">
        <h5>Normal Attack</h5>
        <p><?php echo $data[0]['normaldesc']?></p>
      </div>
    </div>
    <div class="carousel-item">
        <video width = 100% autoplay loop>
            <source src="<?php echo $data[0]['chargedgif']?>" type="video/ogg">
        </video> 
      <div class="carousel-caption d-none d-md-block">
        <h5>Charged Attack</h5>
        <p><?php echo $data[0]['chargeddesc']?></p>
      </div>
    </div>
    <div class="carousel-item">
        <video width = 100% autoplay loop>
            <source src="<?php echo $data[0]['plungegif']?>" type="video/ogg">
        </video> 
      <div class="carousel-caption d-none d-md-block">
        <h5>Plunge Attack</h5>
        <p><?php echo $data[0]['plungedesc']?></p>
      </div>
    </div>
    <div class="carousel-item">
        <video width = 100% autoplay loop>
            <source src="<?php echo $data[0]['skillgif']?>" type="video/ogg">
        </video> 
      <div class="carousel-caption d-none d-md-block">
        <h5>Elemental Skill</h5>
        <p><?php echo $data[0]['skilldesc']?></p>
      </div>
    </div>
    <div class="carousel-item">
        <video width = 100% autoplay loop>
            <source src="<?php echo $data[0]['burstgif']?>" type="video/ogg">
        </video> 
      <div class="carousel-caption d-none d-md-block">
        <h5>Elemental Burst</h5>
        <p><?php echo $data[0]['burstdesc']?></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


        <div class="container rounded bg-white mt-5 mb-5 carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="row justify-content-center">
                <div class="col-4 carousel-item">
                    <video width="320" height="240" controls>
                        <source src="<?php echo $data[0]['normalgif']?>" type="video/ogg">
                    </video> 
                </div>
                <div class="col-4 carousel-item">
                <P> <?php echo $data[0]['normaldesc']?></p>
                </div>
            </div>
            </div>
        </div>
    </div>



        <?php 
        $error_msg = "";
        ?>
        <form action="testfile.php" method="post" id="form1">
            <div class="text-center">
            <input type="hidden" name="category" value="characters">
            <input type="hidden" name="name" value="Diluc">
                <button type="submit" class="btn btn-primary">Save Diluc</button>
            </div>
        </form>
        <?php 
        $error_msg = "";
        echo $error_msg; ?>
    </div>

    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>