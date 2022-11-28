<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/strlog.css">
</head>
<header id="strona">
    signUpPage
</header>
<body>
<div class="container">
    <form action="signUp.php" method="POST" id='mid' class="containerdiv">
        
        <input type="text" placeholder="Podaj Nazwę" name="userName" id="input"><br>        
        <input type="email" placeholder="Podaj Email" name="userEmail" id="input"><br>        
        <input type="password" placeholder="Podaj Hasło" name="userPassword" id="input"><br>
        <input type="password" placeholder="Podaj Ponownie Hasło" name="userPassword" id="input"><br>
        <?php
            if(isset($_SESSION['signInError'])) {
                echo "<p style='color: red'>Niepoprawny login lub hasło!</p>";
            }
        ?>        
        <input type="submit" value="Zaloguj" id="przycisk">

    </form>
</div>
</body>
</html>