<?php
    include_once 'includes/header.php';

    require_once 'includes/userdata.php';

    if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
        header('location: index.php');
        exit();
    }
?>

<html>
    <head>
        <title>Uw profiel</title>
    </head>

    <body>
        <div class="profilecontainer">
            <div class="userinformation">
                    <?php foreach ($userInformation as $userInfo) { ?>
                            <h4>Gebruikersnaam:</h4>
                            <p><?= $userInfo['username']; ?></p>
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
                            <a href="editprofile.php?id=<?= $userInfo['user_id']; ?>">Edit</a>
                            <a href="deleteaccount.php?id=<?= $userInfo['user_id'] ?>">Delete</a>
                    <?php } ?>
            </div>
        </body>

</html>