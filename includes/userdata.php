<?php

require_once "dbh.inc.php";

//Get the result set from the database with a SQL query
$userId = $_SESSION['userid'];
$query = "SELECT * FROM useraccounts WHERE user_id = $userId;";
$result = mysqli_query($conn, $query);

//Loop through the result to create a custom array
$userInformation = [];
while ($row = mysqli_fetch_assoc($result)) {
    $userInformation[] = $row;
}

//Close connection
mysqli_close($conn);