<?php
    include_once 'includes/header.php';

    require_once 'includes/userdata.php';

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
                            <a href="editprofile.php?id=<?= $userInfo['user_id']; ?>">Edit</a>
                    <?php } ?>
            </div>
        </body>

</html>