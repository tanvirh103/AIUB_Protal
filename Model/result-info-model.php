<?php
require_once('../Model/database.php');
function addresult($courseid,$coursename,$sectionid,$sectionname,$teacherid,$teachername,$userid,$studentname){
    $conn=dbConnection();
    $sql="INSERT INTO resultinfo VALUES('$courseid','$coursename','$sectionid','$sectionname','$teacherid','$teachername','$userid','$studentname','','')";
    $result=mysqli_query($conn,$sql);
    return true;
}

function getallstudentlist($id){
    $conn=dbConnection();
    $sql="SELECT * FROM resultinfo WHERE sectionId ='$id'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function searchstudentresult($name){
    $conn=dbConnection();
    $sql="SELECT * FROM resultinfo WHERE studentName LIKE '%$name%'";
    $result=mysqli_query($conn,$sql);
    return $result;
}

function getresult($id,$secid){
    $conn=dbConnection();
    $sql="SELECT * FROM resultinfo WHERE studentId='$id' and sectionId='$secid'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1){
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
}

function updateresult($id,$secid,$mid,$final){
    $conn=dbConnection();
    $sql="UPDATE resultinfo SET midResult = '$mid', finalResult= '$final' WHERE studentId ='$id' and sectionId='$secid'";
    $result=mysqli_query($conn,$sql);
    return true;
}
?>