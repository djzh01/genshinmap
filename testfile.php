<?php
require_once("Database.php");
session_start();

$db = new Database();
#where not exists (select * from genshin_saved
#where name = $_POST[name] and id = $_SESSION[id]

 $insert = $db->query("insert into genshin_saved (user_id, entity_id) values (?, ?)", 
 "ii", $_SESSION["id"], $_POST["entity_id"]);
if (!$insert) {
$error_msg = "Error adding transaction";
} else {
$success_msg = "Transaction added succesfully";
#header("Location: ?command=transaction");
}
?>