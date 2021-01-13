<?php
?>

<?php
include_once "includes/header.php"

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style/taskuploaderstyle.css"/>

<body>
<div>
    <form action="./taskuploader.php">
        <label for="taskname">Naam van klus:</label>
        <input type="text" id="taskname" name="taskname" placeholder="klusnaam...">

        <label for="hourlywage">Uurloon:</label>
        <input type="text" id="hourlywage" name="hourlywage" placeholder="€...">

        <label for="taskcat">Categorie van klus:</label>
        <select id="taskcat" name="taskcat">
            <option value="standardopt">Kies hier de categorie van uw klus...</option>
            <option value="schilderen">Schilderen</option>
            <option value="elektronica">Elektronica</option>
            <option value="cleaning">Schoonmaken</option>
            <option value="softwarehelp">Software</option>
            <option value="garden">Tuin</option>
        </select>
        <label for="deadlineselect">Datum selecteren:</label>
        <input type="date" id="start" name="trip-start"
               value="2021-01-01"
               min="2021-01-01" max="2030-12-31">
        <input type="submit" value="Submit">
    </form>
</div>
</form>
</body>
</html>

