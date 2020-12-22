<?php

    $firstName ='';
    $lastName = '';
    $streetName = '';
    $houseNumber = '';
    $city = '';
    $postal ='';
    $email = '';
    $phoneNumber = '';
    $title = '';
    $description = '';
    $hourlyWage = '';
    $timeToComplete = '';
    $deadline ='';

    if(isset($_POST['submit'])) {       //Niet aankomen, ik pas het zelf aan wanneer jij de form hebt bijgewerkt.
        $ok = true;

        if(!isset($_POST['firstname']) || $_POST['firstname'] === '') {
            $ok = false;
        } else{
            $firstName = $_POST['firstname'];
        }
        if(!isset($_POST['lastname']) || $_POST['lastname'] === '') {
            $ok = false;
        } else {
            $lastName = $_POST['lastname'];
        }
        if(!isset($_POST['street']) || $_POST['street'] === '') {
            $ok = false;
        }else {
            $streetName = $_POST['street'];
        }
        if(!isset($_POST['housenumber']) || $_POST['housenumber'] === '') {
            $ok = false;
        } else {
            $houseNumber = $_POST['housenumber'];
        }
        if(!isset($_POST['city']) || $_POST['city'] === '') {
            $ok = false;
        } else{
            $city = $_POST['city'];
        }
        if(!isset($_POST['postal']) || $_POST['postal'] === '') {
            $ok = false;
        } else{
            $postal = $_POST['postal'];
        }
        if(!isset($_POST['email']) || $_POST['email'] === '') {
            $ok = false;
        } else{
            $email = $_POST['email'];
        }
        if(!isset($_POST['phone']) || $_POST['phone'] === '') {
            $ok = false;
        } else{
            $phoneNumber = $_POST['phone'];
        }
        
        if(!isset($_POST['title']) || $_POST['title'] === '') {
            $ok = false;
        } else{
            $title = $_POST['title'];
        }
        if(!isset($_POST['description']) || $_POST['description'] === '') {
            $ok = false;
        } else{
            $description = $_POST['description'];
        }
        if(isset($_POST['deadline'])) {
            $deadline = $_POST['deadline'];
        }
        if(isset($_POST['hourlywage'])) {
            $hourlyWage = $_POST['hourlywage'];
        }
        if(isset($_POST['timetocomplete'])) {
            $timeToComplete = $_POST['timetocomplete'];
        }

        if($ok === true) {
            require_once 'includes/database.php';
    
            $sql = sprintf(
                    "INSERT INTO `customer`(`first_name`, `last_name`, `postal_code`, `street_name`, `house_number`, `city`, `phone_number`, `email_adress`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
                    $db->real_escape_string($firstName),
                    $db->real_escape_string($lastName),
                    $db->real_escape_string($postal),
                    $db->real_escape_string($streetName),
                    $db->real_escape_string($houseNumber),
                    $db->real_escape_string($city),
                    $db->real_escape_string($phoneNumber),
                    $db->real_escape_string($email)
            );
            $sqlS = sprintf(
                "INSERT INTO `task_orders`(`task_name`, `task_description`, `wage`, `time_to_complete`, `task_deadline`) VALUES ('%s', '%s', '%s', '%s', '%s')",
                $db->real_escape_string($title),
                $db->real_escape_string($description),
                $db->real_escape_string($hourlyWage),
                $db->real_escape_string($timeToComplete),
                $db->real_escape_string($deadline)
            );
    
    
            $db->query($sql);
            $db->query($sqlS);
            echo '
                <style>
                .alert {
                    padding: 20px;
                    background-color: #008000;
                    color: white;
                  }
                </style>
                <div class="alert"> 
                    <strong>Gelukt!</strong> Uw gegevens zijn verzonden!.
                </div>'
            ;
            $db->close();
        } else {
            echo '
                <style>
                .alert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                  }
                </style>
                <div class="alert"> 
                    <strong>Oeps!</strong> Het lijkt er op dat er iets mis is gegaan, controleer of u alles goed heeft ingevuld.
                </div>'
            ;
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


 <header>
    <h1>Taak aanmaken</h1>
 </header>


<br><br><br><br>

<section>

<h2>Persoonlijke details</h2>

<form action="" method="post">
    Naam:
        <input type="text" name="firstname" placeholder="Voornaam">
        <input type="text" name="lastname" placeholder="Achternaam"><br><br>

    Adres:
        <input type="text" name="street" placeholder="Straatnaam">
        <input type="text" name="housenumber" placeholder="Huisnummer"><br><br>

    Woonplaats:
        <input type="text" name="city" placeholder="Stad/Dorp">
        <input type="text" name="postal"placeholder="Postcode"> <br><br>

    Contactgegevens:
        <input type="text" name="email" placeholder="Emailadres">
        <input type="text" name="phone" placeholder="Telefoonnummer"> <br><br>
    <hr style="width:40%;text-align:left;margin-left:0">

    <h2>Taak details</h2>

    Titel:
        <input type="text" name="title" placeholder="Titel van de taak"><br><br>

    Beschrijving:
        <textarea rows="4" cols="50" name="description" form="usrform"></textarea><br><br>

    Deadline:
        <input type="text" id="datepicker" name="deadline" placeholder="dd/mm/jjjj"> <br><br>

    Uurloon:
    <input type="text" name="hourlywage" placeholder="bijv. €5,-"><br><br>

    Verwachte tijdsbesteding:
    <input type="text" name="timetocomplete" placeholder="bijv. 1 uur"><br><br>

    <hr style="width:40%;text-align:left;margin-left:0">
    <input type="submit" name="submit" value="Verzenden">
    <br>
</form>
</section>

</body>
</html>