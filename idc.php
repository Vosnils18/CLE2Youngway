<?php

require_once 'includes/dbh.inc.php';

//Get the result set from the database with a SQL query
$query = "SELECT * FROM useraccounts;";
$result = mysqli_query($conn, $query)
or die ("Connection failed: " . mysqli_connect_error());

//Loop through the result to create a custom array
$appointments = [];
while ($row = mysqli_fetch_assoc($result)) {
    $appointments[] = $row;
}

//Close connection
mysqli_close($conn);
?>


<h4>coole tabel</h4>

<table>
<?php foreach ($appointments as $appointments) { ?>
    <tr>
        <th>Gebruikersnaam: </th>
        <th>Volledige naam: </th>
        <th>Emailadres: </th>
        <th>Adres: </th>
        <th>Telefoonnummer: </th>
        <th>Judgement: </th>
    </tr>
    <td><?= $appointments['username']; ?></td>
    <td><?= $appointments['name']; ?></td>
    <td><?= $appointments['email']; ?></td>
    <td><?php
        if (!isset($userInfo['streetname']) || !isset($userInfo['house_number'])) {
            echo "niet opgegeven";
        }
        else {
            echo $userInfo['streetname'] . $userInfo['house_number'];
        }
        ?></td>
    <td><?php
        if (!isset($userInfo['phone'])) {
            echo "niet opgegeven";
        }
        else {
            echo $userInfo['phone'];
        }
        ?></td>
    <td><a href="yes.php">yes</a></td>
    <td><a href="no.php">no</a></td>
<?php } ?>
</table>





























