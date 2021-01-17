<?php
if (isset($_POST['submit'])) {
    require_once "header.php";

    $taskname = $_POST['taskname'];
    $hourlywage = $_POST['hourlywage'];
    $userId = $_SESSION['userid'];
    $taskcat = $_POST['taskcat'];
    $deadline = $_POST['trip-start'];
    $description = $_POST['temp1'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputTask($taskname, $hourlywage, $taskcat, $deadline, $description) !== false) {
        header('location: ../taskuploader.php?error=emptyinput');
        exit();
    }

    createTask($conn, $userId, $taskname, $description, $hourlywage, $deadline, $taskcat);

}
else {
    header('location: ./taskuploader.php');
    exit();
}