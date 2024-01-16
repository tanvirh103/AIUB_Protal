<?php 
require_once('../Model/database.php');
function enrollcourse($studentid,$courseid,$coursename,$secid,$secname,$room,$time,$teacherid,$teachername){
    $conn=dbConnection();
    $sql="INSERT INTO enrollinfo VALUES('$studentid','$courseid','$coursename','$secid','$secname','$room','$time','$teacherid','$teachername')";
    $result=mysqli_query($conn,$sql);
    return true;
}


?>