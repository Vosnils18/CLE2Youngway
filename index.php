<?php
    include_once "includes/header.php"

?>
<html>
<link rel="stylesheet" href="style/errorstyle.css">
    <link rel="stylesheet" href="style/homepagestyle.css" type="text/css">
    <title>Youngway</title>
</head>

<body>
<div class="greenalert"><?php
    if (isset($_GET["event"])) {
        if($_GET["event"] == "logoutcomplete") {
            echo
                "<span class='closebtn' onclick=this.parentElement.style.display='none'; >&times;</span>
                 <strong>Gelukt!</strong> U bent succesvol uitgelogd."
            ;
        }
    }
?>
<?php
if (isset($_GET["event"])) {
    if($_GET["event"] == "logincomplete") {
        echo
        "<span class='closebtn' onclick=this.parentElement.style.display='none'; >&times;</span>
                 <strong>Gelukt!</strong> U bent succesvol ingelogd."
        ;
    }
}
?></div>

<div class="bg-image">
    <div class="bg-text">

    <h1>Welkom bij Youngway</h1><br>
    <h2>Ga hier opzoek naar een taak.</h2>
        </div>
        <form class="example" action="taskpage.php" method="post">
            <input type="text" placeholder="Zoeken.." name="search2">
        </form>
    </div>
</div>

<div class="quickguideye">
    <div class="square1"><img src="images/guideimage1.png"></div>
    <div class="square2"><img src="images/guideimage2.png"></div>
    <div class="square3"><img src="images/guideimage3.png"></div>
    <div class="square4"><h2>Stap 1: Oriëntatie</h2><p>U bent op zoek naar iemand die uw klus kan vervullen.  Youngway biedt veel verschillende diensten aan dus wij kunnen u vast helpen!</p></div>
    <div class="square5"><h2>Stap 2: Contact</h2><p>Nadat u besluit te kiezen voor youngway nemen we contact met u op. Hier vragen wij naar eigenschappen van de klus, persoonlijke gevens en leren we u kennen.</p> </div>
    <div class="square6"><h2>Stap 3: Afronding</h2><p>Youngway komt bij u langs om de klus te voltooien. Er wordt achteraf en factuur verstuurd of indien van te voren afgesproken een offerte nageleefd.</p> </div>

</div>
</body>
</html>

<?php
include_once "includes/footer.html"
?>
<br>
