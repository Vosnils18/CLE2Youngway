<?php
    if(isset($_POST['datepicker1'])) {
        echo $_POST['datepicker1'];
    }
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Afspraak inplannen</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
</head>
<body>

<form action="" method="post">
    <input type="text" id="datepicker" name="datepicker1">
    <input type="submit" value="Datum selecteren">
</form>

</p>


</body>
</html>