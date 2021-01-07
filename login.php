<?php
    include_once 'includes/header.php';
?>


<body>
<h1>inloggen</h1>
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


    <button type="submit" name="submit">log in</button>

</form>

</div>

</html>

<?php
    include_once 'includes/footer.html'
?>