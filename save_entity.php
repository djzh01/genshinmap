<?php
session_start();
spl_autoload_register(function ($classname) {
    include "classes/$classname.php";
});
$db = new Database();

if (!isset($_SESSION["id"])) {
    header("Location: login.php");
} else {
    $data = $db->query(
        "SELECT * FROM genshin_saved WHERE user_id = ? AND entity_id = ?",
        "ii",
        $_SESSION["id"],
        $_GET["entity_id"]
    );
    if (empty($data[0])) {
        $insert = $db->query(
            "insert into genshin_saved (user_id, entity_id) values (?, ?)",
            "ii",
            $_SESSION["id"],
            $_GET["entity_id"]
        );
        if (!$insert) {
            $msg = "Error adding entity.";
        } else {
            $msg = "Added succesfully!";
        }
    }
    else{
        $msg = "Bookmark already exists";
    }

}

echo "<div class='alert alert-danger mt-2 text-center'>" . $msg . "</div>"; 
