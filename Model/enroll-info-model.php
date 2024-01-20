<?php 
require_once('../Model/database.php');
function enrollcourse($studentid,$studentname,$courseid,$coursename,$secid,$secname,$room,$time,$teacherid,$teachername){
    $conn=dbConnection();
    $sql="INSERT INTO enrollinfo VALUES('$studentid','$studentname','$courseid','$coursename','$secid','$secname','$room','$time','$teacherid','$teachername')";
    $result=mysqli_query($conn,$sql);
    return true;
}

function getenrolledcourse($id){
    $conn=dbConnection();
    $sql="SELECT * FROM enrollinfo WHERE studentId ='$id'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
?>