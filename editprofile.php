<?php

include_once "includes/header.php";
require_once "includes/dbh.inc.php";

if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
    header('location: index.php');
    exit();
}

if (isset($_POST['submit'])) {
    $userId = mysqli_real_escape_string($conn, $_SESSION['userid']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $streetname = mysqli_real_escape_string($conn, $_POST['streetname']);
    $houseNmb = mysqli_real_escape_string($conn, $_POST['house_number']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    require_once 'includes/form-validation.php';

    $user = [
        'name' => $name,
        'email' => $email,
        'streetname' => $streetname,
        'house_number' => $houseNmb,
        'phone' => $phone,
    ];

    if (empty($errors)) {
        $query = "UPDATE useraccounts SET name = '$name', email = '$email', streetname = '$streetname', house_number = '$houseNmb', phone = '$phone'
        WHERE user_id = '$userId';";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header('location: index.php');
            exit();
        }
        else {
            $errors[] = 'something wrong in query' . mysqli_error($conn);
        }
    }
}
else if (isset($_GET['id'])) {

    $userId = $_GET['id'];

    //Get the record from the database result
    $query = "SELECT * FROM useraccounts WHERE user_id = " . mysqli_escape_string($conn, $userId);
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    } else {
        // redirect when db returns no result
        header('Location: index.php');
        exit();
    }
}
else {
    header('Location: index.php?error=help');
    exit();
}

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Prodiel bewerken</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Edit "<?= htmlentities($user['name']) ?>"</h1>

<form action="" method="post">
    <div class="data-field">
        <label for="name">Volledige naam: </label>
        <input id="name" type="text" name="name" value="<?= htmlentities($user['name']) ?>"/>
    </div>
    <div class="data-field">
        <label for="email">Emailadres: </label>
        <input id="email" type="text" name="email" value="<?= htmlentities($user['email']) ?>"/>
    </div>
    <div class="data-field">
        <label for="streetname">Straatnaam: </label>
        <input id="streetname" type="text" name="streetname" value="<?= htmlentities($user['streetname']) ?>"/>
    </div>
    <div class="data-field">
        <label for="house_number">Huisnummer: </label>
        <input id="house_number" type="number" name="house_number" value="<?= htmlentities($user['house_number']) ?>"/>
    </div>
    <div class="data-field">
        <label for="phone">telefoonnummer: </label>
        <input id="phone" type="number" name="phone" value="<?= htmlentities($user['phone']) ?>"/>
    </div>
    <button type="submit" name="submit" id="submit">verzenden</button>
</form>
<div>
    <a href="index.php">Klik hier om terug te gaan daar de homepagina.</a>
</div>
</body>
</html>

