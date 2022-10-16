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
        if(!isset($_GET['userName'])){
            echo '<p style="color: red; border:solid; padding:0.6rem;">
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
        if(!isset($_GET['userEmail'])){
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
        if(!isset($_GET['userPassword'])){
            echo  '<p style="color: red; border:solid; padding:0.6rem;">
            Nie podałeś hasła.
            </p>';
        }
        ?>

        <input type="password" placeholder="Podaj ponownie hasło" name="userPassword" id="input"><br>

        <?php 
        // if(isset($_GET['userPassword'])){
        //     $password = $_GET(['userPassword']);
        //     echo "Password: ". $password;
        // } else{
        //     echo  '<p style="color: red; border:solid; padding:0.6rem;">
        //     Nie podałeś hasła.
        //     </p>';
        // }
        if(!isset($_GET['userPassword'])){
            echo  '<p style="color: red; border:solid; padding:0.6rem;">
            Nie podałeś hasła.
            </p>';
        }
        ?>
        
        <input type="submit" value="Zaloguj" id="przycisk">
    </form>
</div>
</body>
</html>