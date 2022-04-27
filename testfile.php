<?php
<<<<<<< HEAD
require_once("Database.php");
=======
include("classes/Database.php");
>>>>>>> 20c4258e0fcabf2c013844040d6312582a3db00e
session_start();

$db = new Database();
#where not exists (select * from genshin_saved
#where name = $_POST[name] and id = $_SESSION[id]

<<<<<<< HEAD
if(!isset($_SESSION["id"])){
    echo "log in first";
}
else{
    $insert = $db->query("insert into genshin_saved (user_id, name, category) values (?, ?, ?)", 
    "iss", $_SESSION["id"], $_POST["name"], $_POST["category"]);
    if (!$insert) {
    $error_msg = "Error adding transaction";
    } else {
    $success_msg = "Transaction added succesfully";
    #header("Location: ?command=transaction");
    }
    include("Characters.php");
=======
 $insert = $db->query("insert into genshin_saved (user_id, entity_id) values (?, ?)", 
 "ii", $_SESSION["id"], $_POST["entity_id"]);
if (!$insert) {
$error_msg = "Error adding transaction";
} else {
$success_msg = "Transaction added succesfully";
#header("Location: ?command=transaction");
>>>>>>> 20c4258e0fcabf2c013844040d6312582a3db00e
}
?>