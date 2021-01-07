<?php
    include_once "includes/header.php"

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/homepagestyle.css" type="text/css">
    <title>Youngway</title>
</head>

<body>
<div class="greenalert">
<?php
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
?>
</div>
<div class="bg-image">
    <div class="bg-text">

    <h1>Welkom bij Youngway</h1><br>
    <h2>Ga hier opzoek naar de taak.</h2>
        </div>
        <form class="example" action="/action_page.php">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit">zoek</button>
        </form>

    </div>
</div>

<div class="wayitworks">
    <p>Hoe werkt het?</p>
</div>

<div class="quickguide">
    <img src="images/placeholderimg.png" style="width:200px;height:200px;">
    <img src="images/placeholderimg.png" style="width:200px;height:200px;">
    <img src="images/placeholderimg.png" style="width:200px;height:200px;">
</div>

<div class="quickguide2">
    <p>Stap 1</p>
    <p>Stap 2</p>
    <p>Stap 3</p>
</div>
</body>
</html>

<?php
include_once "includes/footer.html"

?>