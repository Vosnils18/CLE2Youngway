<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM useraccounts WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=stmtfailed');
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO useraccounts (username, name, email, password) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, 'ssss', $username, $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../signup.php?error=none');
    mysqli_field_count($stmt);
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["user_id"];
        $_SESSION["username"] = $uidExists["username"];
        header("location: ../index.php?event=logincomplete");
        exit();
    }
}

function emptyInputTask($taskname, $hourlywage, $taskcat, $deadline, $description) {
    $result;
    if (empty($taskname) || empty($hourlywage) || empty($taskcat) || empty($deadline) || empty($description)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createTask($conn, $userId, $taskname, $description, $hourlywage, $deadline, $taskcat) {
    $sql = "INSERT INTO task_orders (user_id, task_name, task_description, wage, task_deadline, task_category) VALUES(?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../taskuploader.php?error=stmtfailed');
        exit();
    }


    mysqli_stmt_bind_param($stmt, 'ssssss', $userId, $taskname, $description, $hourlywage, $deadline, $taskcat);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../taskuploader.php?error=none');
    mysqli_field_count($stmt);
    exit();
}