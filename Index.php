<?php
    $firstname='';
    $lastname= '';
    $gender='';
    $date='';
    if(isset($_POST['datepicker1'])) {
        echo htmlspecialchars($_POST['datepicker1'], ENT_QUOTES);
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
    Voornaam: <input type="text" name="first_name"> <br>
    Achternaam: <input type="text" name="last_name"> <br>
    Gender:
    <input type="radio" name="gender" value="m">Man <br>
        <input type="radio" name="gender" value="v">Vrouw <br>
        <input type="radio" name="gender" value="o">Overige <br>
    <input type="text" id="datepicker" name="datepicker1">
    <input type="submit" name="submit" value="Datum selecteren">
</form>

</body>
</html>