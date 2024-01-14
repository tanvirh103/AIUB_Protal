<?php
require_once('../Model/user-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}
$id=$_COOKIE['flag'];
$row=getinfo($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <center><font size="15">Dashboard</font><br><hr width="20%" color="#004ca3"></center><br>
    <center>
        <table width="auto" border="1" cellpadding="25" cellspacing="0" bordercolor="#004ca3"><tr><td><font family="times new roman" size="3">
            <?php
            if($row['role']=="Admin"){
               echo" <a href=\"addstudent.php\">Create New student</a><br><br>
               <a href=\"addnewhradmin.php\">Create New HR Admin</a><br><br>
               <a href=\"addnewcourse.php\">Add New Course</a><br><br>
               <a href=\"addnewsection.php\">Add New Section</a><br><br>
                <a href=\"facultylist.php\">Faculty List</a><br><br>
                <a href=\"studentlist.php\">Student List</a><br><br>
                <a href=\"sectionlist.php\">Section List</a><br><br>
                <a href=\"courselist.php\">View Course List</a><br><br>
                <a href=\"setting.php\">Profile Setting</a><br><br>
                <a href=\"viewprofileinfo.php\">View Profile Information</a><br><br>";
            }else if($row['role']=="Admin HR"){
                echo"<a href=\"addfaculty.php\">Create New Faculty</a><br><br>
                <a href=\"facultylist.php\">Faculty List</a><br><br>
                <a href=\"studentlist.php\">Student List</a><br><br>
                <a href=\"setting.php\">Profile Setting</a><br><br>
                <a href=\"viewprofileinfo.php\">View Profile Information</a><br><br>";
            }else if($row['role']=="Student"){
                echo" <a href=\"viewprofileinfo.php\">View Profile Information</a><br><br>
                <a href=\"facultylist.php\">Registred Course</a><br><br>
                <a href=\"setting.php\">Profile Setting</a><br><br>";
            }else if($row['role']=="Faculty"){
                echo"<a href=\"facultylist.php\">Faculty List</a><br><br>
                <a href=\"studentlist.php\">Student List</a><br><br>
                <a href=\"assignlist.php\">Assign Section</a><br><br>
                <a href=\"setting.php\">Profile Setting</a><br><br>
                <a href=\"courselist.php\">View Course List</a><br><br>
                <a href=\"viewprofileinfo.php\">View Profile Information</a><br><br>";
            }
            ?>
            </font></td></tr>
        </table>
    </center>
    <table align="right"><tr><td><br><a href="logout.php">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>
</body>
</html>