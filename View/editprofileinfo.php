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
    <title>Update Profile Info</title>
</head>
<body>
    <center><font family="times new roman" size="6">Edit Profile Info</font><hr width="15%" color="#004ca3"></center>
    <center><br><form action="../Controller/edit-profile-info-controller.php" method="post"><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1">
    <tr><td><center><font size="4">
            Fullname :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" size="25" align="center"> <br><br>
            Father's Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fathername" size="25" align="center"><br><br>
            Mother's Name :&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mothername" size="25" align="center" ><br><br>
            Blood Group :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bg" size="25" align="center" ><br><br>
            Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" size="25" align="center"><br><br>
            Date Of Birth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dob" size="25" align="center"><br><br>
            <input type="submit" name="submit" value="Update Profile Info"><br><br>
        </center></font></td></tr>
    </table></form></center>
</body>
</html>