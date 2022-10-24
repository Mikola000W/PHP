<?php
    require_once"config.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    // echo $connection -> connect_errno;
    if($connection -> connect_errno == 0) {
        $userEmail = $_POST['userEmail'];
        $userPassword = $_POST['userPassword'];

        $sql = "SELECT * FROM Logowanie WHERE email='$userEmail' AND haslo='$userPassword'";
       
    
        if($result = $connection -> query($sql)) {
            echo "123";
            
            if($result -> num_rows > 0) {
                
                $data = $result -> fetch_assoc();
                $user = $data['user'];
                $email = $data['email'];

                echo "Zalogowałeś się jako $user o adresie email $email";

                $result -> close();
            } else {
                echo "Taki użytkownik nie istnieje";
            }
        }

        $connection -> close();
    }
?>