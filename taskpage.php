<?php
include_once "includes/header.php";
$taskname = '';
$deadline = '';
$description = '';
$searchterm = $_POST['search2'];

$output = array();

require_once "includes/dbh.inc.php";


$query = "SELECT * FROM task_orders WHERE task_name LIKE '$searchterm'";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $taskname = $row['task_name'];
        $deadline = $row['task_deadline'];
        $description = $row['task_description'];
        $category = $row['task_category'];

        $output = array('taskname'=>$taskname, 'deadline'=>$deadline, 'description'=>$description, 'category'=>$category);
        ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style/taskpagestyle.css"/>
<br>
<div class="backgroundpage">
    <br>
<div class="tempor1">
    <div class="titletask"><?php echo $output['taskname']; ?></div>
    <div class="deadlinedate"><?php echo $output['deadline']; ?></div>
    <div class="categorytask"><?php echo $output['category']; ?></div>
    <div class="descriptiontask">
        <p><?php echo $output['description']; ?></p>
    </div>

</div>
    <?php
    }}
    ?>
</div>
