<?php
require_once('../Model/result-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}
$studentid=$_GET['sid'];
$sectionid=$_GET['secid'];
$id=$_COOKIE['flag'];
$row=getresult($studentid,$sectionid);
$flag = 0;
    if($id!=$studentid){
        $flag=1;    
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
    <center><font family="times new roman" size="6">Student Result</font><br><hr width="30%" color="#004ca3"><br></center>
    <center><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1">
        <tr><td><center><font size="4">
           <?php if($flag==0) echo"
            Student ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['studentId']}\" size=\"25\" align=\"center\" readonly> <br><br>
            Student Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['studentName']}\" size=\"25\" align=\"center\" readonly><br><br>
            Course ID :&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['courseId']}\" size=\"25\" align=\"center\" readonly><br><br>
            Course Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['courseName']}\" size=\"25\" align=\"center\" readonly><br><br>
            Section ID :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['sectionId']}\" size=\"25\" align=\"center\" readonly><br><br>
            Section Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['sectionName']}\" size=\"25\" align=\"center\" readonly><br><br>
            Teacher Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['teacherName']}\" size=\"25\" align=\"center\" readonly><br><br>
            Mid Result :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['midResult']}\" size=\"25\" align=\"center\" readonly><br><br>
            Final Result :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['finalResult']}\" size=\"25\" align=\"center\" readonly><br><br>";
            else if($flag==1){
               echo"Student ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['studentId']}\" size=\"25\" align=\"center\" readonly> <br><br>
               Student Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['studentName']}\" size=\"25\" align=\"center\" readonly><br><br>
               Course ID :&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['courseId']}\" size=\"25\" align=\"center\" readonly><br><br>
               Course Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['courseName']}\" size=\"25\" align=\"center\" readonly><br><br>
               Section ID :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['sectionId']}\" size=\"25\" align=\"center\" readonly><br><br>
               Section Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['sectionName']}\" size=\"25\" align=\"center\" readonly><br><br>
               Teacher Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['teacherName']}\" size=\"25\" align=\"center\" readonly><br><br>
               Mid Result :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['midResult']}\" size=\"25\" align=\"center\" readonly><br><br>
               Final Result :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" value=\"{$row['finalResult']}\" size=\"25\" align=\"center\" readonly><br><br>";
            }
            ?>  
        </center></font></td></tr>
    </table></center>
</body>
</html>