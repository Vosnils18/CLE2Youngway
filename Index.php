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
            $db = new mysqli(       //koppeling met database (op pc van Nils voor nu), don't touch. En ja, ik ga password en username aanpassen maar hij staat nu local en wachtwoord enzo krijg je meestal van de provider.
                'localhost',
                'root',
                '',
                'test_youngway'
            );
            $sql = sprintf(
                    "INSERT INTO customer (first_name, last_name, postal_code) VALUES ( '%s', '%s', '%s')",
                $db->real_escape_string($firstname),
                $db->real_escape_string($lastname),
                $db->real_escape_string($postal)
            );
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
    <title>Afspraak inplannen</title>
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
<!--Ik wil ook nog een topnav en een footer, daarnaast moet je ook nog de pagina opmaken en alles centreren-->

<!--Formulier (nog niet aangepast aan de informatie die in de database moet komen, dat mag jij doen), zoek maar even op w3 voor de tags van een form ofzo.-->
<form action="" method="post">
    Voornaam: <input type="text" name="firstname"> <br>
    Achternaam: <input type="text" name="lastname"> <br>
    Gender:
    <input type="text" name="postal"> <br>
    <input type="text" id="datepicker" name="date"> <br>
    <input type="submit" name="submit" value="Verzenden">
</form>

</body>
</html>