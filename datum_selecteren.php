<?php

    $firstname='';
    $lastname= '';
    $postal='';
    $date='';

    if(isset($_POST['submit'])) {       //Niet aankomen, ik pas het zelf aan wanneer jij de form hebt bijgewerkt.
        $ok = true;
        if(!isset($_POST['firstname']) || $_POST['firstname'] === '') {
            $ok = false;
        } else{
            $firstname = $_POST['firstname'];
        }
        if(!isset($_POST['lastname']) || $_POST['lastname'] === '') {
            $ok = false;
        } else {
            $lastname = $_POST['lastname'];
        }
        if(!isset($_POST['postal']) || $_POST['postal'] === '') {
            $ok = false;
        }else {
            $postal = $_POST['postal'];
        }
        if(!isset($_POST['date']) || $_POST['date'] === '') {
            $ok = false;
        } else {
            $date = $_POST['date'];
        }

        if($ok) {
            printf('Voornaam: %s
            <br>Achternaam: %s
            <br>Postcode: %s
            <br>Datum: %s',
                htmlspecialchars($firstname, ENT_QUOTES),
                htmlspecialchars($lastname, ENT_QUOTES),
                htmlspecialchars($postal, ENT_QUOTES),
                htmlspecialchars($date, ENT_QUOTES));
        }

        if($ok) {
            require_once 'includes/database.php';

            $sql = sprintf(
                    "INSERT INTO `customer`(`first_name`, `last_name`, `postal_code`) VALUES ('%s', '%s', '%s')",
                $db->real_escape_string($firstname),
                $db->real_escape_string($lastname),
                $db->real_escape_string($postal));

            $db->query($sql);
            echo '<p>Gegevens opgeslagen!</p>';
            $db->close();
        }
    }
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/stylesheet.css">

    <title>Taak aanmaken</title>
    <!--Dit is de API voor de datum-kiezer (staat alleen nog online-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
</head>



<body>
<ul>
    <img src="images/Youngway_logo-300x78.png">
    <li style="float:right"><a class="active" href="#home">Home</a></li>
    <li style="float:right"><a href="#news">News</a></li>
    <li style="float:right"><a href="#contact">Contact</a></li>
    <li style="float:right"><a href="#about">About</a></li>
</ul>
<!--Ik wil ook nog een topnav en een footer, daarnaast moet je ook nog de pagina opmaken en alles centreren-->

<!--Formulier (nog niet aangepast aan de informatie die in de database moet komen, dat mag jij doen), zoek maar even op w3 voor de tags van een form ofzo.-->
<section>

<h1>Taak aanmaken</h1>

<h2>Persoonlijke details</h2>

<form action="" method="post">
    Voornaam: <br><input type="text" name="firstname"> <br><br>
    Achternaam: <br><input type="text" name="lastname"> <br><br>
    Postcode: <br><input type="text" name="postal"> <br><br>
    Straatnaam: <br><input type="text" name="streetname"> <br><br>
    Huisnummer: <br><input type="text" name="housenumber"> <br><br>
    Woonplaats: <br><input type="text" name="city"> <br><br>
    Emailadres: <br><input type="text" name="email"> <br><br>
    Telefoonnummer: <br><input type="text" name="phonenumber"> <br><br>
    Datum selecteren: <br><input type="text" id="datepicker" name="date"> <br><br>
    <p>Beschrijving:</p>
    <textarea rows="4" cols="50" name="comment" form="usrform">Vul hier uw tekst in...</textarea><br>
    <input type="submit" name="submit" value="Verzenden">
    <br>
</form>
</section>

</body>
</html>