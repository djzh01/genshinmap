<?php

class FinanceController {
    private $command;

    private $db;
    
    // If using Monolog (with Composer)
    //private $logger;

    public function __construct($command) {
        //***********************************
        // If we use Composer to include the Monolog Logger
        // global $log;
        // $this->logger = new \Monolog\Logger("TriviaController");
        // $this->logger->pushHandler($log);
        //***********************************

        $this->command = $command;

        $this->db = new Database();
    }

    public function run() {
        switch($this->command) {
            case "transaction":
                $this->transaction();
                break;
            case "addtransaction":
                $this->addTransaction();
                break;
            case "setEntity":
                $this->setEntity();
                break;
            case "logout":
                $this->destroySession();
            case "login":
            default:
                $this->login();
        }
    }

    private function destroySession() {
        session_destroy();
        header("Location: ?command=login");
    }

    private function login() {
        $error_msg = "?";

        if(isset($_SESSION['id'])){
            header("Location: ?command=transaction");
        exit;
}

        if (isset($_POST["email"])) {
            $data = $this->db->query("select * from genshin_user where email = ?;", "s", $_POST["email"]);
            if ($data === false) {
                $error_msg = "Error checking for user";
            } else if (!empty($data)) {
                if($data[0]["username"] === $_POST["username"]){
                    if (password_verify($_POST["password"], $data[0]["password"])) {
                    $_SESSION["username"] = $data[0]["username"];
                    $_SESSION["email"] = $data[0]["email"];
                    $_SESSION["id"] = $data[0]["id"];

                    header("Location: ?command=transaction");
                    } else {
                        $error_msg = "Wrong password";
                    }
                }
                else{
                    $error_msg = "Name doesn't correlate to email.";
                }
            } else { // empty, no user found
                // TODO: input validation
                // Note: never store clear-text passwords in the database
                //       PHP provides password_hash() and password_verify()
                //       to provide password verification
                $insert = $this->db->query("insert into genshin_user (username, email, password) values (?, ?, ?);", 
                        "sss", $_POST["username"], $_POST["email"], 
                        password_hash($_POST["password"], PASSWORD_DEFAULT));
                if ($insert === false) {
                    $error_msg = "Error inserting user";
                } else {
                    $data = $this->db->query("select id from genshin_user where email = ?;", "s", $_POST["email"]);
                    $_SESSION["id"] = $data[0]["id"];
                    $_SESSION["username"] = $_POST["username"];
                    $_SESSION["email"] = $_POST["email"];
                    header("Location: ?command=transaction");
                }
            }
        }
        include("login.php");
    }

    private function transaction() {
        $user = [
            "username" => $_SESSION["username"],
            "email" => $_SESSION["email"],
            "id" => $_SESSION["id"]
        ];

        /*$transdata = $this->db->query("select * from genshin_saved where user_id = ?", "s", $_SESSION["id"]);
        $_SESSION["transactions"] = $transdata;
        
        $sum = 0;
        $sumArr = [];

        foreach($_SESSION["transactions"] as $transaction) {
            $sum += $transaction["amount"];
            if (in_array($transaction["Category"], $sumArr)) {
                $sumArr[$transaction["Category"]] += $transaction["amount"];
            }
            else{
                $sumArr[$transaction["Category"]] = $transaction["amount"];
            }
        }*/


        include("profile.php");
    }
    private function setEntity() {
        echo "SETENTITYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY";
        if(isset($_POST["entity"])){
            $_SESSION["entityName"] = $_POST["entity"]; 
            $_SESSION["entityCat"] = $_POST["category"];
        }
        
    }

    private function addTransaction() {
        $user = [
            "name" => $_SESSION["name"],
            "email" => $_SESSION["email"],
            "id" => $_SESSION["id"]
        ];
        include("testfile.php");
        $error_msg = "";
        $success_msg = "";
        if(isset($itemname)){
            $insert = $this->db->query("insert into genshin_saved (user_id, name) values (?, ?);", 
                        "issdss", $user["id"], $itemname);
            if (!$insert) {
                $error_msg = "Error adding transaction";
            } else {
                $success_msg = "Transaction added succesfully";
                #header("Location: ?command=transaction");
            }
        }
        #include("addtransaction.php");
    }
}