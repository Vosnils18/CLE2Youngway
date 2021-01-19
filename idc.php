<?php

require_once 'includes/dbh.inc.php';

//Get the result set from the database with a SQL query
$query = "SELECT * FROM useraccounts;";
$result = mysqli_query($conn, $query)
or die ("Connection failed: " . mysqli_connect_error());

//Loop through the result to create a custom array
$userInformation = [];
while ($row = mysqli_fetch_assoc($result)) {
    $userInformation[] = $row;
}

//Close connection
mysqli_close($conn);
?>

<?php foreach ($userInformation as $userInfo) { ?>
    <h4>Gebruikersnaam:</h4>
    <item><?= $userInfo['username']; ?></item>
    <h4>Volledige naam: </h4>
    <p><?= $userInfo['name']; ?></p>
    <h4>Emailadres: </h4>
    <p><?= $userInfo['email']; ?></p>
    <h4>Adres: </h4>
    <p><?php
        if (!isset($userInfo['streetname']) || !isset($userInfo['house_number'])) {
            echo "niet opgegeven";
        }
        else {
            echo $userInfo['streetname'] . $userInfo['house_number'];
        }
        ?></p>
    <h4>telefoonnummer: </h4>
    <p><?php
        if (!isset($userInfo['phone'])) {
            echo "niet opgegeven";
        }
        else {
            echo $userInfo['phone'];
        }
        ?></p>
    <a href="anderepagina.php">yes</a>
    <a href="deleteaccount.php?id=<?= $userInfo['user_id'] ?>">Delete</a>
<?php } ?>





<html>
<form action="welcome.php" method="post">
    <textarea>
    </textarea>

    <input type="submit" name="submit">
</form>

</html>


























