<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/stylesheet.css">

<ul>
    <img src="images/Youngway_logo-300x78.png">
    <li style="float:right"><a class="active" href="./index.php">Home</a></li>
    <?php
        if (isset($_SESSION['username'])) {
            echo '<li style="float:right"><a href="./userprofile.php">Profiel</a></li>';
            echo '<li style="float:right"><a href="includes/logout.inc.php">Uitloggen</a></li>';
        }
        else {
            echo '<li style="float:right"><a href="./signup.php">Registreren</a></li>';
            echo '<li style="float:right"><a href="./login.php">Inloggen</a></li>';
        }
    ?>
    <li style="float:right"><a href="#about">Contact</a></li>
</ul>
</head>
