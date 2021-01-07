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

<p></p>
</body>