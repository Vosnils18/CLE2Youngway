<?php
    include_once 'includes/header.php'
?>


<body>
<h1>Registreren</h1>
</body>
<hr>

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
        else if($_GET["error"] == "invaliduid") {
            echo '
                <style>
                .redalert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                  }
                </style>
                <div class="redalert"> 
                    <strong>Oeps!</strong> De gebruikersnaam die u heeft gekozen voldoet niet aan de eisen.
                </div>'
            ;
        }
        else if($_GET["error"] == "invalidemail") {
            echo '
                <style>
                .redalert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                  }
                </style>
                <div class="redalert"> 
                    <strong>Oeps!</strong> Het lijkt er op dat u uw email verkeerd heeft ingevoerd.
                </div>'
            ;
        }
        else if($_GET["error"] == "pwdnomatch") {
            echo '
                <style>
                .redalert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                  }
                </style>
                <div class="redalert"> 
                    <strong>Oeps!</strong> De wachtwoorden die u heeft ingevoerd komen niet overeen.
                </div>'
            ;
        }
        else if($_GET["error"] == "uidtaken") {
            echo '
                <style>
                .redalert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                  }
                </style>
                <div class="redalert"> 
                    <strong>Oeps!</strong> De gebruikersnaam die u heeft gekozen is al in gebruik door een ander account.
                </div>'
            ;
        }
        else if($_GET["error"] == "stmtfailed") {
            echo '
                <style>
                .redalert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                  }
                </style>
                <div class="redalert"> 
                    <strong>Oeps!</strong> Er is iets fout gegaan, probeer het later nog eens of neem contact met ons op.
                </div>'
            ;
        }
        else if($_GET["error"] == "none") {
            echo '
                <style>
                .greenalert {
                    padding: 20px;
                    background-color: #008000;
                    color: white;
                  }
                </style>
                <div class="greenalert"> 
                    <strong>Gelukt!</strong> Uw gegevens zijn verzonden!.
                </div>'
            ;
        }
    }
?>

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