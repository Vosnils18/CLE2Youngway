<?php
    $db = new mysqli(
            'localhost',
        'root',
        '',
        'test_youngway'
    );

    $firstname='';
    $lastname= '';
    $gender='';
    $date='';

    if(isset($_POST['submit'])) {
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
        if(!isset($_POST['gender']) || $_POST['gender'] === '') {
            $ok = false;
        }else {
            $gender = $_POST['gender'];
        }
        if(!isset($_POST['date']) || $_POST['date'] === '') {
            $ok = false;
        } else {
            $date = $_POST['date'];
        }

        if($ok) {
            printf('Voornaam: %s
            <br>Achternaam: %s
            <br>Gender: %s
            <br>Datum: %s',
                htmlspecialchars($firstname, ENT_QUOTES),
                htmlspecialchars($lastname, ENT_QUOTES),
                htmlspecialchars($gender, ENT_QUOTES),
                htmlspecialchars($date, ENT_QUOTES));
        }
    }
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Afspraak inplannen</title>
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

<form action="" method="post">
    Voornaam: <input type="text" name="firstname"> <br>
    Achternaam: <input type="text" name="lastname"> <br>
    Gender:
    <input type="radio" name="gender" value="m">Man
        <input type="radio" name="gender" value="v">Vrouw
        <input type="radio" name="gender" value="o">Overige <br>
    <input type="text" id="datepicker" name="date">
    <input type="submit" name="submit" value="Verzenden">
</form>

</body>
</html>