
<?php
// $connection = new mysqli($host, $db_user, $db_password, $db_name);


$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name= "tmp_name";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>


