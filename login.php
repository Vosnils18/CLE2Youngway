<?php
    include_once 'includes/header.php';

    if (isset($_SESSION['username'])) {
        header('location: index.php');
        exit();
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" type="text/css" href="style/loginregisterstyle.css"/>

<body>
<h1>Inloggen</h1>
</body>
    <hr width="100%" color="#049B14" size="4">

<?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo '
                <style>
                .redalert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                  }
                </style>
                <div class="redalert"> 
                    <strong>Oeps!</strong> Het lijkt er op dat er iets mis is gegaan, controleer of u alles goed heeft ingevuld.
                </div>'
            ;
        }
        else if($_GET["error"] == "wronglogin") {
            echo '
                <style>
                .redalert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                  }
                </style>
                <div class="redalert"> 
                    <strong>Oeps!</strong> Login-informatie klopt niet.
                </div>'
            ;
        }
    }
?>

<div class="registercontainer">
<form action="includes/login.inc.php" method="post">

    <label for="username"><b>Gebruikernaam</b></label><br>
    <input type="text" placeholder="JohnDoe123" id="username" name="username" required><br><br>

    <label for="pwd"><b>Wachtwoord</b></label><br>
    <input type="password" placeholder="Wachtwoord" name="pwd" id="pwd" required><br><br>


    <input type="submit" value="Inloggen" name="submit">

</form>

</div>
</html>

