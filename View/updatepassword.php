<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Update Password</title>
</head>
<body>
    <center><font family="times new roman" size="6">Update Password</font><hr width="15%" color="#004ca3"></center>
    <center><br><form action="../Controller/update-password-controller.php" method="post"><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1"><font family="times new roman" size="4">
        <tr>
            <td><center>
                Old Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="oldpassword" id="oldpassword" size="30" required><br><br>
                New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="newpassword" id="newpassword" size="30" required><br><br>
                Confirm Password:&nbsp;&nbsp; <input type="password" name="confirmpassword" id="confirmpassword" size="30" required><br><br><br>
                <input type="submit" name="submit" value="Update Password"><br>
            </td>
        </tr>
        </center></font></table></form></center>
</body>
</html>