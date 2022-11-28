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
    <form action="SignInPage.php" method="get" id='mid' class="containerdiv">
        
        <input type="text" name="userName" id="input"><br>
        
        <?php
        if(isset($_GET['userName'])){
            $user = $_GET(['userName']);
            echo "Nazwa użytkownika: ". $user;
        } else{
            echo "Nie podałeś nazwy";
        }
        
        ?>
        <input type="email" name="userEmail" id="input"><br>
        <?php     
        if(isset($_GET['userEmail'])){
            $email = $_GET(['userEmail']);
            echo "Email: ". $email;
        } else{
            echo  "Nie podałeś email";<br>
        }?>
        <input type="password" name="userPassword" id="input"><br>
        <?php
        if(isset($_GET['userPassword'])){
            $password = $_GET(['userPassword']);
            echo "Password: ". $password;
        } else{
            echo  "Nie podałeś hasła";
        }?>
        <input type="submit" value="Zaloguj">
    </form>
</div>

</body>



</html>