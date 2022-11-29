<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>IndexSite</title>
</head>
<body>
    <header id="header">
        <div class="header__container">
            <?php define("Index","Index")?>
            <h1><?php echo Index?></h1>
            <nav>
                <ul id="listindex">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div>
                    <?php
                        if  (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] === true) {
                            echo '<button><a href="logout.php">WYLOGUJ</a></button>';
                        } else {
                            echo '<button style="background-color:lightgreen;margin-right:1rem";><a href="signInPage.php">ZALOGUJ</a></button>';
                            echo '<button style="background-color:lightgreen;margin-left:1rem;"><a href="signUpPage.php">ZAREJESTRUJ</a></button>';
                        }
                    ?>
                </div>
            </nav>
        </div>
    </header>
    <section>

    </section>
    <footer>
        <div class="footer__container"></div>
    </footer>
</body>
</html>