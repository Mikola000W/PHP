<?php
    class Main {
        public $host
        public $db_user
        public $db_password
        public $db_name

        public function __construct($host, $db_user, $db_password, $db_name) {
            $this -> host = $host;
            $this -> db_user = $db_user;
            $this -> db_password = $db_password;
            $this -> db_name = $db_name;
            }

        public function connection() {
            $connection = new mysqli($host, $db_user, $db_password, $db_name);
            echo "Połączono! " . $connection -> mysqli;
            }
    }


?>