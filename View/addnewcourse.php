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
    <title>Add New Course</title>
</head>
<body>
    <center><font family="times new roman" size="6">Add New Course</font><hr width="20%" color="#004ca3"></center>
    <center><br><form action="../Controller/add-new-course-controller.php" method="post"><table border="1" width="auto" cellpadding="25" cellspacing="0" bordercolor="#004ca3"><font family="times new roman" size="4">
        <tr><td><center>
            Course ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="courseid" size="30"><br><br>
            Course Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="coursename" size="30"><br><br>
            
            <input type="submit" name="submit" value="Add New Course">
        </center></td></tr>
    </font></table></form></center>
</body>
</html>