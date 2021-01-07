<?php
    require_once './editprofile.php';
    require_once 'functions.inc.php';
//Check if data is valid & generate error if not so
$errors = [];
if ($name == "") {
    $errors['name'] = 'name cannot be empty';
}
if ($email == "") {
    $errors['email'] = 'email cannot be empty';
}
// this error message wil overwrite the previous error when year is empty
if ($streetname == "") {
    $errors['streetname'] = 'streetname cannot be empty';
}
// this error message wil overwrite the previous error when tracks is empty
if ($houseNmb == "") {
    $errors['house_number'] = 'house number cannot be empty';
}
if ($phone == "") {
    $errors['phone'] = 'phone cannot be empty';
}