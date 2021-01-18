<?php
include_once "includes/header.php";
$taskname = '';
$deadline = '';
$description = '';

$output = array();

require_once "includes/dbh.inc.php";

$query = "SELECT * FROM task_orders";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $taskname = $row['task_name'];
        $deadline = $row['task_deadline'];
        $description = $row['task_description'];

        $output = array('taskname'=>$taskname, 'deadline'=>$deadline, 'description'=>$description);
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
    <div class="categorytask">Elektronica</div>
    <div class="descriptiontask">
        <p><?php echo $output['description']; ?></p>
    </div>

</div>
    <?php
    }}
    ?>
</div>
