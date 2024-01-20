<?php
require_once('../Model/result-info-model.php');
require_once('../Model/user-info-model.php');
$id=$_COOKIE['flag'];
$row1=getinfo($id);
$name = $_REQUEST['name'];
$result = searchstudentresult($name);
if(mysqli_num_rows($result)>0){
    echo" <table width=\"auto\" cellspacing=\"0\" cellpadding=\"15\" bordercolor=\"#004ca3\" border=\"1\"><font family=\"times new roman\" size=\"4\">
    <tr><td>Course ID</td>
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
               echo"<td><a href=\"updatemarks.php?sid=$studentId\"><input type=\"submit\" value=\"Update Marks\"></td>";
           }
               echo"</tr>";
       }
   }else{
       echo"No Student Found";
   }
