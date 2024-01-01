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
        <table border="1" cellpadding="15" cellspacing="0" bordercolor="#004ca3"><tr><td><font family="times new roman">
            <?php
            if($row['role']=="Admin"){
                echo"Admin Dashboard";
            }else{
                echo"Wrong Dashboard";
            }
            ?>
            </font></td></tr>
        </table>
    </center>
</body>
</html>