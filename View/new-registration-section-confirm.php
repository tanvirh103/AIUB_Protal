<?php 
require_once('../Model/section-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}

if(isset($_POST['submit'])){
    $coursename=$_POST['course'];
    $section=$_POST['section'];
    $row=getinforoom($coursename,$section);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Confirm Course</title>
</head>
<body>
    <center><font family="times new roman" size="6">Confirm Course</font><hr width="20%" color="#004ca3"></center>
    <center><br><table width="auto" cellspacing="0" cellpadding="10" bordercolor="#004ca3" border="1"><font family="times new roman" size="4"></center>
    <tr><td><center><form method="post" action="../Controller/enroll-course-controller.php">
        Course ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="courseid" type="text" readonly value="<?php echo $row['courseId'] ?>" size="25"><br><br>
        Course Name:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="coursename" readonly value="<?php echo $row['courseName'] ?>" size="25"><br><br>
        Section ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="sectionid" type="text" readonly value="<?php echo $row['sectionId'] ?>" size="25"><br><br>
        Section :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="sectionname" type="text" readonly value="<?php echo $row['sectionName'] ?>" size="25"><br><br>
        Room Number:&nbsp;&nbsp;<input type="text" name="roomnumber" readonly value="<?php echo $row['roomNumber'] ?>" size="25"><br><br>
        Time :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="time" type="text" readonly value="<?php echo $row['dayTime'] ?>" size="25"><br><br>
        <input type="hidden" name="teacherid" value="<?php echo $row['teacherId'] ?>">
        <input type="hidden" name="teachername" value="<?php echo $row['teacherName'] ?>">
        <input type="submit" name="submit" value="Confirm"><br><br>
        </center>
    </td></tr>
    </font></form></table></center>
</body>
</html>