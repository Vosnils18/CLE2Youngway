<?php
    include_once 'includes/header.html'

    
?>


<body>
<h1>Registreren</h1>
</body>
<hr>
<div class="registercontainer">
    <label for="fname"><b>Voornaam</b></label><br>
    <input type="text" placeholder="Voornaam" id="fname" name="fname" required><br><br>

    <label for="lname"><b>Achternaam</b></label><br>
    <input type="text" placeholder="Achternaam" id="lname" name="lname" required><br><br>

    <label for="email"><b>Emailadres</b></label><br>
    <input type="text" placeholder="Emailadres" name="email" id="email" required><br><br>

    <label for="psw"><b>Wachtwoord</b></label><br>
    <input type="password" placeholder="Wachtwoord" name="psw" id="psw" required><br><br>

    <label for="psw-repeat"><b>Herhaal wachtwoord</b></label><br>
    <input type="password" placeholder="Herhaal wachtwoord" name="psw-repeat" id="psw-repeat" required><br>
    <hr>


    <input type="submit" name="submit" value="Verzenden">
</html>

<?php
    include_once 'includes/footer.html'
?>