<?php
require_once('../Model/database.php');
function addresult($courseid,$coursename,$sectionid,$sectionname,$teacherid,$teachername,$userid,$studentname){
    $conn=dbConnection();
    $sql="INSERT INTO resultinfo VALUES('$courseid','$coursename','$sectionid','$sectionname','$teacherid','$teachername','$userid','$studentname','','')";
    $result=mysqli_query($conn,$sql);
    return true;
}


?>