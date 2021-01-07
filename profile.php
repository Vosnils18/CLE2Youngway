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
            <div class="userinformation">
            <?php
                $userId = $_SESSION['userid'];
                $sql = "SELECT * FROM useraccounts WHERE user_id = $userId;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if (!isset($_SESSION['username'])) {
                    header('location: index.php');
                    exit();
                }
                else {
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<p>";
                            echo "Gebruikersnaam: ";
                            echo $row['username'];
                            echo "<br><br> Volledige naam: ";
                            echo $row['name'];
                            echo "<br><br> Email: ";
                            echo $row['email'];
                            echo "<br><br> Adres: ";
                            if (!isset($row['streetname']) || $row['streetname'] = '') {
                                echo "Niet opgegeven";
                            }
                            else {
                                echo $row['streetname'];
                                echo "<br>";
                                echo $row['house_number'];
                            }

                        }
                    }
                }
                ?>
        </div>
    </body>

</html>