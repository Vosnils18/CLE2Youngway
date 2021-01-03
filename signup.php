<?php
    include_once 'includes/header.html'
?>


<body>
<h1>Registreren</h1>
</body>
<hr>

<div class="registercontainer">
<form action="includes/signup.inc.php" method="post">
    
    <label for="name"><b>Naam</b></label><br>
    <input type="text" placeholder="John Doe" id="name" name="name" required><br><br>

    <label for="email"><b>Emailadres</b></label><br>
    <input type="text" placeholder="john.doe@email.nl" name="email" id="email" required><br><br>

    <label for="username"><b>Gebruikernaam</b></label><br>
    <input type="text" placeholder="JohnDoe123" id="username" name="username" required><br><br>

    <label for="pwd"><b>Wachtwoord</b></label><br>
    <input type="password" placeholder="Wachtwoord" name="pwd" id="pwd" required><br><br>

    <label for="pwdRepeat"><b>Herhaal wachtwoord</b></label><br>
    <input type="password" placeholder="Herhaal wachtwoord" name="pwdRepeat" id="pwdRepeat" required><br>
    <hr>


    <button type="submit" name="submit">Registreren</button>

</form>
</div>

</html>

<?php
    include_once 'includes/footer.html'
?>