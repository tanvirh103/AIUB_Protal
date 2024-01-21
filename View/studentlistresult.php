<?php
require_once('../Model/user-info-model.php');
require_once('../Model/result-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}
$secid=$_GET['secid'];
$id=$_COOKIE['flag'];
$result=getallstudentlist($secid);
$row1=getinfo($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script>
        function searchstudentresult(str){
    if(str==""){
        document.getElementById('message').innerHTML="Please search any name";
        return;
    }
    let xhttp=new XMLHttpRequest();
    xhttp.open('post','../Controller/search-result-controller.php',true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send('name='+str);
    xhttp.onload=function(){
        document.getElementById('message').innerHTML=this.responseText
    }
}
    </script>
    <title>Studnet List</title>
</head>
<body>
    <center><font family="times new roman" size="6">Student List</font><br><hr width="15%" color="#004ca3">
    <br><input type="text" id="search" placeholder="Search by Fullname" onkeyup="searchstudentresult(this.value)" size="25"><br><br>
    <font family="times new roman" id="message"></font>
    </center>
    <center><br><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1"><font family="times new roman" size="4">
        <?php if(mysqli_num_rows($result)>0){
         echo"<tr><td>Course ID</td>
            <td>Course Name</td>
            <td>Section ID</td>
            <td>Section Name</td>
            <td>Teacher's Name</td>
            <td>Student ID</td>
            <td>Student Name</td>";
            if($row1['role']=="Faculty"){
            echo"<td>Action</td>";
            }
            echo"</tr>";
            while($row=mysqli_fetch_assoc($result)){
                $courseId=$row['courseId'];
                $courseName=$row['courseName'];
                $sectionID=$row['sectionId'];
                $sectionName=$row['sectionName'];
                $teacherName=$row['teacherName'];
                $studentId=$row['studentId'];
                $studentName=$row['studentName'];
             echo"
                <tr>
                <td>$courseId</td>
                <td>$courseName</td>
                <td>$sectionID</td>
                <td>$sectionName</td>
                <td>$teacherName</td>
                <td>$studentId</td>
                <td>$studentName</td>";
                if($row1['role']=="Faculty"){
                    echo"<td><a href=\"updatemarks.php?sid=$studentId&secid=$sectionID\"><input type=\"submit\" value=\"Update Marks\"></td>";
                }
                    echo"</tr>";
            }
        }else{
            echo"No Student Found";
        }
        ?></font>
        </table>
    </center>
</body>
</html>