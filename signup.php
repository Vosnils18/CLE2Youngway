<?php
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/homepagestyle.css">
<title>Registeren</title>
</head>
<body>
<h1>Registreren</h1>
</body>
<hr>
<div class="registercontainer">
    <label for="fname"><b>Voornaam</b></label>
    <input type="text" placeholder="Voornaam" id="fname" name="fname" required>

    <label for="lname"><b>Achternaam</b></label>
    <input type="text" placeholder="Achternaam" id="lname" name="lname" required>

    <label for="email"><b>Emailadres</b></label>
    <input type="text" placeholder="Emailadres" name="email" id="email" required>

    <label for="psw"><b>Wachtwoord</b></label>
    <input type="password" placeholder="Wachtwoord" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Herhaal wachtwoord</b></label>
    <input type="password" placeholder="Herhaal wachtwoord" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <hr style="width:40%;text-align:left;margin-left:0">
    <input type="submit" name="submit" value="Verzenden">
</html>