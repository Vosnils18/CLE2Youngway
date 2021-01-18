<?php
include_once "includes/header.php";
require_once "includes/dbh.inc.php";



if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style/taskuploaderstyle.css"/>

<body>
<div>
    <form action="includes/taskuploader.inc.php" method="post">
        <label for="taskname">Naam van klus:</label>
        <input type="text" id="taskname" name="taskname" placeholder="klusnaam..." required>

        <label for="hourlywage">Uurloon:</label>
        <input type="text" id="hourlywage" name="hourlywage" placeholder="€..." required>

        <label for="taskcat">Categorie van klus:</label>
        <select id="taskcat" name="taskcat" required>
            <option value="standardopt">Kies hier de categorie van uw klus...</option>
            <option value="schilderen">Schilderen</option>
            <option value="elektronica">Elektronica</option>
            <option value="cleaning">Schoonmaken</option>
            <option value="softwarehelp">Software</option>
            <option value="garden">Tuin</option>
            <option value="overig">Overig</option>
        </select>

        <label for="deadlineselect">Datum selecteren:</label>
        <input type="date" id="start" name="trip-start"
               value="2021-01-01"
               min="2021-01-01" max="2030-12-31" required>

        <label for="taskdescription">Beschrijving van taak </label>
        <input style="padding-bottom: 4% " type="text" placeholder="informatie klus..." name="temp1" required>
        <input type="submit" value="Submit" name="submit">
    </form>
</div>
</body>
</html>