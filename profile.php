<?php
session_start();
spl_autoload_register(function($classname) {
    include "$classname.php";
});
$db = new Database();

if (!isset($_SESSION["id"])) {
    header("Location: login.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!isset($_POST["username"])) {
        $username_err = "Please enter username.";
    }
    else{
        $data = $db->query("UPDATE genshin_user SET username = ? WHERE id = ?;", "si", $_POST["username"], $_SESSION["id"]);
        if($data === false){
            $err_msg = "Could not update username.";
        }
        else{
            $_SESSION["username"] = $_POST["username"];
        }
    }
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
    <link rel="stylesheet/less" type="text/css" href="styles/styles.less" />
    <link rel="stylesheet/less" type="text/css" href="styles/profile.less" />

    <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Teyvationary</title>
</head>

<body>
<?php 
        if(!empty($username_err)){
            echo '<div class="alert alert-danger">' . $username_err . '</div>';
        }        
        ?>
    <div class="pos-f-t">
    <?php include 'utils/nav.php'?>
    </div>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Profile picture">
                    <span class="font-weight-bold">
                        <?= ucfirst($_SESSION["username"]) ?>
                    </span>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label for="email" class="form-label mt-3">Change Username</label>
                        <input type="text" class="form-control mt-3 <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="username" name="username"/>
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        <button type="submit" class="btn btn-outline-primary mt-3 w-100">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <h1 class="text-center">BOOKMARKS</h1>
                <hr>
                <ul class="bookmarks">

                    <li>
                        <a href="#">
                            <img src="https://cdn.mos.cms.futurecdn.net/rWa8PJZ7LFjyHqKHEASV5.jpg" alt="bookmark">
                            <p class="text-center">Yae Miko</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://progameguides.com/wp-content/uploads/2021/07/Genshin-Impact-Character-Raiden-Shogun-1-768x803.jpg" alt="bookmark">
                            <p class="text-center">Raiden Shogun</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg" alt="bookmark">
                            <p class="text-center">Klee</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg" alt="bookmark">
                            <p class="text-center">Klee</p>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg" alt="bookmark">
                            <p class="text-center">Klee</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg" alt="bookmark">
                            <p class="text-center">Klee</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>