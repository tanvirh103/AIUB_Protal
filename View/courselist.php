<?php
require_once('../Model/course-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}

$result=getallcourse();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
</head>
<body>
    <center><font family="times new roman" size="6">Course List</font><hr width="15%" color="#004ca3"></center>
    <center><br><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1"><font family="times new roman" size="4">
    <?php 
    if(mysqli_num_rows($result)>0){
        echo"<tr>
        <td>Course ID</td>
        <td>Course Name</td>
        </tr>";
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['courseId'];
            $name=$row['courseName'];
            echo"
            <tr>
            <td>$id</td>
            <td>$name</td>
            </tr>";
        }
    }else{
        echo"<tr><td>No Course Found</td></tr>";
    }
    ?>
    </font></table>
</body>
</html>