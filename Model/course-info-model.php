<?php 
require_once('../Model/database.php');
function insertcourse($name,$teacher){
    $conn=dbConnection();
    $sql="INSERT INTO courseinfo VALUES('','$name','$teacher')";
    $result=mysqli_query($conn,$sql);
    return $result;
}
?>