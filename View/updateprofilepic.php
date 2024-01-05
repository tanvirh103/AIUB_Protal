<?php
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Picture</title>
</head>
<body>
    <center><font family="times new roman" size="6">Update Profile Picture</font><hr width="20%" color="#004ca3"></center>
</body>
</html>