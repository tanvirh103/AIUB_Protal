<?php
require_once('../Model/enroll-info-model.php');
$id=$_COOKIE['flag'];
$result=getenrolledcourse($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>
    <title>Enrolled Course</title>
</head>
<body>
    <center><font family="times new roman" size="6">Enrolled Course</font><br><hr width="15%" color="#004ca3">
</center>
    <center><br><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1"><font family="times new roman" size="4">
        <?php if(mysqli_num_rows($result)>0){
         echo"<tr><td>Course ID</td>
            <td>Course Name</td>
            <td>Teacher Name</td>
            <td>Section ID</td>
            <td>Section</td>
            <td>Room Number</td>
            <td>Day Time</td>
            </tr>";
            while($row=mysqli_fetch_assoc($result)){
                $courseid=$row['courseId'];
                $coursename=$row['courseName'];
                $teachername=$row['teacherName'];
                $sectionid=$row['sectionId'];
                $sectionname=$row['sectionName'];
                $room=$row['roomNumber'];
                $time=$row['dayTime'];
             echo" <tr>
                <td>$courseid</td>
                <td>$coursename</td>
                <td>$teachername</td>
                <td>$sectionid</td>
                <td>$sectionname</td>
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