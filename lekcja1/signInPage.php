<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignInPage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/strlog.css">
</head>
<header id="strona">
    SignIn
</header>
<body>
<div class="container">
    <form action="index.php" method="POST" id='mid' class="containerdiv">
        
        <input type="text" placeholder="Login" name="userName" id="input"><br>        
        <input type="email" placeholder="Email" name="userEmail" id="input"><br>        
        <input type="password" placeholder="Password" name="userPassword" id="input"><br>
        <?php
            if(isset($_SESSION['signInError'])) {
                echo "<p style='color: red'>Incorrect login or/and password!</p>";
            }
        ?>        
        <input type="submit" value="LogIn" id="przycisk">

    </form>
</div>
</body>
</html>