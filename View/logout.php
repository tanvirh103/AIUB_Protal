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
    <title>Logout page</title>
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br>
    <center><img src="../Uploads/logout.gif" alt="Logout picture" width="500" height="350"></center>
</body>
</html>
<?php
setcookie("flag","",time()-36000,'/');
header("refresh:3;url=../index.html");
?>