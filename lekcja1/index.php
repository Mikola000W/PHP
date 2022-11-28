<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>
<body>
    <header id="header">
        <div class="header__container">
            <?php define("LOGO","LOGO")?>
            <h1><?php echo LOGO?></h1>
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
                            echo '<button><a href="signInPage.php">ZALOGUJ</a></button>';
                            echo '<button><a href="signUpPage.php">ZAREJESTRUJ</a></button>';
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