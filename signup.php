<?php
    include_once 'includes/header.html'
?>


<body>
<h1>Registreren</h1>
</body>
<hr>

<div class="registercontainer">
<form action="signup.inc.php" method="post">
    
    <label for="fname"><b>Voornaam</b></label><br>
    <input type="text" placeholder="Voornaam" id="firstname" name="firstname" required><br><br>

    <label for="lname"><b>Achternaam</b></label><br>
    <input type="text" placeholder="Achternaam" id="lastname" name="lastname" required><br><br>

    <label for="email"><b>Emailadres</b></label><br>
    <input type="text" placeholder="Emailadres" name="email" id="email" required><br><br>

    <label for="psw"><b>Wachtwoord</b></label><br>
    <input type="password" placeholder="Wachtwoord" name="password" id="password" required><br><br>

    <label for="psw-repeat"><b>Herhaal wachtwoord</b></label><br>
    <input type="password" placeholder="Herhaal wachtwoord" name="psw-repeat" id="psw-repeat" required><br>
    <hr>


    <button type="submit" name="submit">Registreren</button>

</form>
</div>

</html>

<?php
    include_once 'includes/footer.html'
?>