<?php

include_once 'includes/header.php';
require_once "includes/dbh.inc.php";
$userId = mysqli_real_escape_string($conn, $_SESSION['userid']);

if (isset($_POST['submit'])) {

    $query = "DELETE FROM useraccounts WHERE user_id = " . mysqli_escape_string($conn, $_SESSION['userid']);

    mysqli_query($conn, $query) or die ('Error: '.mysqli_error($conn));

    mysqli_close($conn);

    //Redirect to homepage after deletion & exit script
    header("Location: includes/logout.inc.php");
    exit;

} else if(isset($_GET['id'])) {
    //Retrieve the GET parameter from the 'Super global'
    $albumId = $_GET['id'];

    //Get the record from the database result
    $query = "SELECT * FROM useraccounts WHERE user_id = " . mysqli_escape_string($conn, $userId);
    $result = mysqli_query($conn, $query) or die ('Error: ' . $query );

    if(mysqli_num_rows($result) == 1)
    {
        $user = mysqli_fetch_assoc($result);
    }
    else {
        // redirect when db returns no result
        header('Location: index.php');
        exit;
    }
} else {
    // Id was not present in the url OR the form was not submitted

    // redirect to index.php
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Delete - <?= $user['name'] ?></title>
</head>
<body>
<h2>Delete - <?= $user['name'] ?></h2>
<form action="" method="post">
    <p>
        Weet u zeker dat u het account van: "<?= $user['name']?>" wilt verwijderen?
    </p>
    <input type="hidden" name="id" value="<?= $user['userid'] ?>"/>
    <input type="submit" name="submit" value="Verwijderen"/>
</form>
</body>
</html>

