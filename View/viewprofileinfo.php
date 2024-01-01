<?php
require_once('../Model/user-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}
$id=$_COOKIE['flag'];
$row=getinfo($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
</head>
<body>
    <center><font family="times new roman" size="6">Profile information</font><br><hr width="30%" color="#004ca3"><br></center>
    <center><table width="30%" cellspacing="0" cellpadding="25" bordercolor="#004ca3" border="1">
        <tr><td><center><font size="4">
            <img src="../<?php echo $row['profilePicture']  ?>" alt="Profile Picture" width="200" height="200"><br><br>
            Fullname :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$row['userName'] ?><br><br>
            Father's Name :&nbsp;&nbsp;&nbsp;<?php echo$row['fathersName'] ?><br><br>
            Mother's Name :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$row['mothersName'] ?><br><br>
            Blood Group :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo$row['bloodGroup'] ?><br><br>
            Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$row['email'] ?><br><br>
            Date Of Birth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo$row['dob'] ?><br><br>
        </center></font></td></tr>
    </table></center>
</body>
</html>