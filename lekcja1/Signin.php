<?php
    require_once"config.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    echo $connection -> connect_errno;
    echo $connection -> connect_error;

    $connection -> close();

$sql = "SELECT * FROM users WHERE email='$userEmail' AND password='$userPaassword'";
$result = $connection -> query($sql)
?>