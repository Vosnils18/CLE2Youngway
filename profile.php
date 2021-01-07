<?php
    include_once 'includes/header.php';
    include_once 'includes/dbh.inc.php';
?>

<html>
    <head>
        <title>Uw profiel</title>
    </head>

    <body>

        <div class="profilecontainer">
            <div class="usernamecontainer">
            <?php
                $userId = $_SESSION['userid'];
                $sql = "SELECT * FROM useraccounts WHERE user_id = $userId;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                ?>
            <?php
                if (!isset($_SESSION['username'])) {
                    header('location: index.php');
                    exit();
                }
                else {
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['username'];
                        }
                    }
                }
                ?>
            </div>
        </div>
    </body>

</html>