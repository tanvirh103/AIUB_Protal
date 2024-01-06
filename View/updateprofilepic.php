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
    <title>Update Profile Picture</title>
</head>
<body>
    <center><font family="times new roman" size="6">Update Profile Picture</font><hr width="20%" color="#004ca3"></center>
    <center><br><form action="../Controller/update-picture-controller.php" method="post" enctype="multipart/form-data"><table width="auto" cellspacing="0" cellpadding="10" bordercolor="#004ca3" border="1"><font family="times new roman" size="4"></center>
    <tr><td><center>
        Profile Source:&nbsp;&nbsp;<input type="file" name="picture" id="picture" accept=".jpeg,.jpg,.png,.gif" required><br><br>
        <input type="submit" name="submit" value="Update Profile Picture"><br><br>
        </center>
    </td></tr>
    </font></table></form></center>
</body>
</html>