<?php 
session_start();
$message=$_SESSION['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert Message</title>
</head>
<body>
    <center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br>
        <font face="times new roman" size="7"><?php echo $message ?></font>
    </center>
</body>
</html>