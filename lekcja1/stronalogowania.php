<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/strlog.scss">
</head>
<header id="strona">
    Strona logowania
</header>
<body>
<div class="container">
    <form action="stronalogowania.php" method="get" id='mid' class="containerdiv">

        <input type="text" placeholder="Podaj Nazwę" name="userName" id="input"><br>
        
        <?php
        // if(isset($_GET['userName'])){
        //     $user = $_GET(['userName']);
        //     echo "Nazwa użytkownika: ". $user;
        // } else{
        //     echo '<p style="color: red; border:solid; padding:0.6rem;">
        //     Nie podałeś nazwy.
        //     </p>';
        // }
        if(!isset($_POST['userName'])){
            echo '<p style="color: red; bor der:solid; padding:0.6rem;">
            Nie podałeś nazwy.
            </p>';
        }
        ?>
        
        <input type="email" placeholder="Podaj Email" name="userEmail" id="input"><br>

        <?php     
        // if(isset($_GET['userEmail'])){
        //     $email = $_GET['userEmail'];
        //     echo "Email: ". $email;
        // } else{
        //     echo  '<p style="color: red; border:solid; padding:0.6rem;">
        //     Nie podałeś Email.
        //     </p>';
        // }
        if(!isset($_POST['userEmail'])){
            echo  '<p style="color: red; border:solid; padding:0.6rem;">
            Nie podałeś Email.
            </p>';
        }
        ?>
        
        <input type="password" placeholder="Podaj Hasło" name="userPassword" id="input"><br>
        
        <?php 
        // if(isset($_GET['userPassword'])){
        //     $password = $_GET(['userPassword']);
        //     echo "Password: ". $password;
        // } else{
        //     echo  '<p style="color: red; border:solid; padding:0.6rem;">
        //     Nie podałeś hasła.
        //     </p>';
        // }
        if(!isset($_POST['userPassword'])){
            echo  '<p style="color: red; border:solid; padding:0.6rem;">
            Nie podałeś hasła.
            </p>';
        }
        ?>
        
        <input type="submit" value="Zaloguj" id="przycisk">
    </form>
</div>
<?php
    require_once"config.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    if($connection -> connect_errno == 0) {
        $userEmail = $_POST['userEmail'];
        $userPassword = $_POST['userPassword'];

        $sql = "SELECT * FROM users WHERE email='$userEmail' AND password='$userPassword'";
        
        // if wykona się tylko, gdy zapytanie sql jest poprawne składniowo
        // jeżeli nie odnajdzie pasujących wyników zapytania, również zwróci true
        if($result = $connection -> query($sql)) {
            // jeżeli ilość zwróconych wierszy jest większa niż 1
            if($result -> num_rows > 0) {
                // zwraca dane w tabicy asocjacyjnej, które odpowiadają wierszowi z bazy danych
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
</body>
</html>