<?php
require_once('../Model/user-info-model.php');
if(!isset($_COOKIE['user'])){
    echo"You cann't access the page";
}
$id=$_COOKIE['user'];
$row=getinfo($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <center><font size="15">Dashboard</font><br><hr width="30%" color="#004ca3"></center><br>
    <center>
        <table width="auto" border="1" cellpadding="25" cellspacing="0" bordercolor="#004ca3"><tr><td><font family="times new roman" size="3">
            <?php
            if($row['role']=="Admin"){
               echo" <a href=\"addstudent.php\">Create New student Account</a><br><br>
                <a href=\"facultylist.php\">Faculty List</a><br><br>
                <a href=\"studentlist.php\">Student List</a><br><br>";
            }else{
                echo"Wrong Dashboard";
            }
            ?>
            </font></td></tr>
        </table>
    </center>
    <table align="right"><tr><td>logout</td></tr></table>
</body>
</html>