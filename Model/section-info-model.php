<?php
require_once('../Model/database.php');
function addnewsection($courseid,$coursename,$teacherid,$teachername,$sec,$room){
    $conn=dbConnection();
    $sql="INSERT INTO sectioninfo VALUES('$courseid','$coursename','$teacherid','$teachername','','$sec','$room')";
    $result=mysqli_query($conn,$sql);
    return true;
}

function getallsection(){
    $conn=dbConnection();
    $sql="SELECT * FROM sectioninfo";
    $result=mysqli_query($conn,$sql);
    return $result;
}

function searchcourse($id){
    $conn=dbConnection();
    $sql="SELECT * FROM sectioninfo WHERE courseId LIKE'%$id%'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
?>