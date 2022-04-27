<?php
session_start();
spl_autoload_register(function ($classname) {
    include "classes/$classname.php";
});
$db = new Database();
if (!isset($_GET['name']) || empty($_GET['name'])) $name_err = "Character name required";

$data = $db->query("select * from genshin_item JOIN genshin_entity on genshin_item.entity_id = genshin_entity.id where name=?", "s", $_GET["name"]);

if ($data === false) {
    $err_msg = "Could not find character of that name";
}
?>
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
    <?php include 'utils/nav.php' ?>
    <div class="container rounded bg-white mt-5 mb-5">
        <h1 class="center text-center"><?php echo $data[0]['name'] ?></h1>
        <div class="row">

            <a href="#" class="col-md-8 mx-auto d-flex">
                <img src="<?php echo $data[0]['image'] ?>" alt="bookmark" class="mx-auto" style="border-radius: 50%; height: 50vh; width: 35vw" />
            </a>

        </div>
        <br>
        <div class="row">
            <div class="col-md-8 mx-auto d-flex">
                <h2 style="text-align: center; font-style: italic; font-family: 'Courier New', monospace; " class="center"><?php echo $data[0]['overview'] ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto d-flex">
                <video width=100% autoplay loop>
                    <source src="<?php echo $data[0]['preview'] ?>" type="video/ogg">
                </video>
            </div>
        </div>
        <hr>
        <form action="testfile.php" method="post" id="form1">
            <div class="text-center">
                <input type="hidden" name="entity_id" value=<?= $data[0]['entity_id'] ?>>
                <button onclick="myFunction()" type="submit" class="btn btn-primary">Save <?= $data[0]['name'] ?></button>
            </div>
        </form>


        <?php
        $error_msg = "";
        echo $error_msg; ?>


    </div>
    <script>
        function add() {
            //alert("bruh");
            var ajax = new XMLHttpRequest();
            ajax.open("POST", "testfile.php", true);
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send("category=characters&name=Diluc");

            alert("success");
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>