<?php
require_once('../Model/user-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}
$id=$_COOKIE['flag'];
$row=getinfo($id);
$flag = 0;
    if(isset($_GET['sid'])){
    $id1 = $_GET['sid'];
    $row1 = getinfo($id1);
    if($id!=$id1){
        $flag=1;    
    }
    }
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
    <center><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1">
        <tr><td><center><font size="4">
           <?php if($flag==0) echo"<img src=\"../{$row['profilePicture']}\" alt=\"Profile Picture\" width=\"200\" height=\"200\"><br><br>
            Fullname :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['userName']}\" size=\"25\" align=\"center\" readonly> <br><br>
            Father's Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['fathersName']}\" size=\"25\" align=\"center\" readonly><br><br>
            Mother's Name :&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['mothersName']}\" size=\"25\" align=\"center\" readonly><br><br>
            Blood Group :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['bloodGroup']}\" size=\"25\" align=\"center\" readonly><br><br>
            Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['email']}\" size=\"25\" align=\"center\" readonly><br><br>
            Date Of Birth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['dob']}\" size=\"25\" align=\"center\" readonly><br><br>";
            else if($flag==1){
               echo"<img src=\"../{$row1['profilePicture']}\" alt=\"Profile Picture\" width=\"200\" height=\"200\"><br><br>
            Fullname :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row1['userName']}\" size=\"25\" align=\"center\" readonly> <br><br>
            Father's Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row1['fathersName']}\" size=\"25\" align=\"center\" readonly><br><br>
            Mother's Name :&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row1['mothersName']}\" size=\"25\" align=\"center\" readonly><br><br>
            Blood Group :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row1['bloodGroup']}\" size=\"25\" align=\"center\" readonly><br><br>
            Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row1['email']}\" size=\"25\" align=\"center\" readonly><br><br>
            Date Of Birth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row1['dob']}\" size=\"25\" align=\"center\" readonly><br><br>";
            }
            ?>
            
        </center></font></td></tr>
    </table></center>
</body>
</html>