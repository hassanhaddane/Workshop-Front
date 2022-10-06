<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEMETERRE</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<nav>
    <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div class="logo">
                <div alt="1" class="menuItem" ><a   href="/Workshop/index.php">DEMETERRE</a></div>
            </div>
            <div id="bar">
                <div id="mymenu"></div>
                <div alt="2" class="menuItem" ><a   href="/content/vigne/vigne.php">Vigne</a></div>
                <div alt="3" class="menuItem" ><a  href="/content/ble/ble.php">Blé</a></div>
                <div alt="4" class="menuItem" ><a  href="/content/bovin/bovin.php">Bovin</a></div>
                <div alt="5" class="menuItem" ><a  href="/content/porcin/porcin.php">Porcin</a></div>

            </div>
            <div class="menu-items">
                <li><a href="#">Information Client</a></li>
                <li><a href="#">Mes champs</a></li>
                <li><a href="/Workshop/connexion/login.php">Déconnecter</a></li>
                <?php
                session_start();
                if(isset($_GET['deconnexion']))
                {
                    if($_GET['deconnexion']==true)
                    {
                        session_unset();
                        header("location:/WorkshopFront/login.php");
                    }
                }
                ?>
            </div>
        </div>
    </div>
</nav>
</body>
</html>