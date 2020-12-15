<?php

$firstname='';
$lastname= '';
$postal='';
$date='';

require_once 'includes/database.php';
$sql = 'SELECT * FROM customer';
$result = $db->query($sql);

foreach ($result as $row) {
    printf(
        '<li>%s, %s (%s)</li>',
        htmlspecialchars($row['last_name'], ENT_QUOTES),
        htmlspecialchars($row['first_name'], ENT_QUOTES),
        htmlspecialchars($row['postal_code'], ENT_QUOTES));
}
?>

<html>



</html>
