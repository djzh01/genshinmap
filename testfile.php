<?php
require_once("Database.php");
session_start();

$db = new Database();
#where not exists (select * from genshin_saved
#where name = $_POST[name] and id = $_SESSION[id]

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
}
?>