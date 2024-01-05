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
    <link rel="stylesheet" href="../style.css">
    <title>Setting</title>
</head>
<body>
    <center><font family="times new roman" size="6">Update Profile Info</font><hr width="15%" color="#004ca3"></center>
    <center><br><table width="auto" cellspacing="0" cellpadding="25" bordercolor="#004ca3" border="1"><font family="times new roman" size="4">
        <tr>
            <td><a href="updatepassword.php">Update Password</a><br><br>
            <a href="updateprofilepic.php">Update Profile Picture</a><br><br>
            <a href="editprofileinfo.php">Update Profile Information</a><br><br></td>
        </tr>
    </font></table></center>
</body>
</html>