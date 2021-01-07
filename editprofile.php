<?php

    require_once 'includes/userdata.php';

    if ($_SESSION['user_id'] !== $_GET['id']) {
        header("location: ./index.php");
    }
    else {

    }