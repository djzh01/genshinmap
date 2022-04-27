<!-- https://cs4640.cs.virginia.edu/glc6qrx/hw5/ -->

<?php
session_start();
spl_autoload_register(function($classname) {
    include "classes/$classname.php";
});
$db = new Database();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!isset($_POST["email"]) || empty($_POST["email"])) $email_err = "Please enter valid email";
    if (!isset($_POST["username"]) || empty($_POST["username"])) $username_err = "Please enter username";
    if (!isset($_POST["password"]) || empty($_POST["password"])) $password_err = "Please enter password";

    if(empty($email_err) && empty($username_err) && empty($password_err)){
        $data = $db->query("select * from genshin_user where email = ?;", "s", $_POST["email"]);
        if ($data === false) $login_err = "Could not find account linked to this email. Please register below";
        else if (!empty($data)) {
            if($data[0]["username"] === $_POST["username"]){
                if (password_verify($_POST["password"], $data[0]["password"])) {
                    $_SESSION["username"] = $data[0]["username"];
                    $_SESSION["email"] = $data[0]["email"];
                    $_SESSION["id"] = $data[0]["id"];
                    header("Location: profile.php");
                } else {
                    $login_err = "Wrong password";
                }
            }
            else{
                $login_err = "Username invalid for this email.";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">  

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="CS4640">
        <meta name="description" content="CS4640 Trivia Login Page">  

        <title>Genshin Map Login</title>
        <link rel="stylesheet/less" type="text/css" href="styles/styles.less" />

        <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php include 'utils/nav.php' ?>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
        <div class="container" style="margin-top: 15px;">
            <div class="row col-xs-8 text-center">
                <h1>Genshin Map Login</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" id="email" name="email"/>
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="name" name="username"/>
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="password" name="password"/>
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="text-center">                
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <form action="register.php" method="get" class="mt-3">
                    <div class="text-center">                
                        <button type="submit" class="btn btn-outline-primary">Register</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>