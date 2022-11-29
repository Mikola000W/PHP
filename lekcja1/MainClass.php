<?php
class MainClass {
    public function dbConnect(){
        require_once "config.php";
        return new mysqli($host, $db_user,$db_password,$db_name);
    }

    public function blockEntrance($move_to) {
        if(!isset($_SESSION['signedIn'])) {
            header("location: $move_to");   
        }
    }
}
?>