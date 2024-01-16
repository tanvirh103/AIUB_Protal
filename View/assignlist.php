<?php
require_once('../Model/section-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You can't access this page");
}
$id=$_COOKIE['flag'];
$result=getsectionbyfaculty($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Assign Section List</title>
</head>
<body>
    <center><font family="times new roman" size="6">Assign Section List</font><br><hr width="20%" color="#004ca3">
    <br><br>
</center>
    <center><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1"><font family="times new roman" size="4">
        <?php if(mysqli_num_rows($result)>0){
         echo"<tr>
            <td>Course ID</td>
            <td>Course Name</td>
            <td>Section ID</td>
            <td>Section</td>
            <td>Room Number</td>
            <td>Day Time</td>
            </tr>";
            while($row=mysqli_fetch_assoc($result)){
                $courseid=$row['courseId'];
                $coursename=$row['courseName'];
                $time=$row['dayTime'];
                $sectionid=$row['sectionId'];
                $section=$row['sectionName'];
                $room=$row['roomNumber'];
             echo"<tr>
                <td>$courseid</td>
                <td>$coursename</td>
                <td>$sectionid</td>
                <td>$section</td>
                <td>$room</td>
                <td>$time</td>
                </tr>";
            }
        }
        ?></font>
        </table>
    </center>
</body>
</html>