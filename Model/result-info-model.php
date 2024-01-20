<?php
require_once('../Model/database.php');
function addresult($courseid,$coursename,$sectionid,$sectionname,$teacherid,$teachername,$userid){
    $conn=dbConnection();
    $sql="INSERT INTO resultinfo VALUES('$courseid','$coursename','$sectionid','$sectionname','$teacherid','$teachername','$userid','','')";
    $result=mysqli_query($conn,$sql);
    return true;
}

?>