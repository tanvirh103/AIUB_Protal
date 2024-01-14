<?php
require_once('../Model/database.php');
function addnewsection($courseid,$coursename,$teacherid,$teachername,$sec,$room){
    $conn=dbConnection();
    $sql="INSERT INTO sectioninfo VALUES('$courseid','$coursename','$teacherid','$teachername','','$sec','$room')";
    $result=mysqli_query($conn,$sql);
    return true;
}
?>