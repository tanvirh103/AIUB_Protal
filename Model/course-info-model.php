<?php 
require_once('../Model/database.php');
function insertcourse($name,$id){
    $conn=dbConnection();
    $sql="INSERT INTO courseinfo VALUES('$id','$name')";
    $result=mysqli_query($conn,$sql);
    return true;
}
function getallcourse(){
    $conn=dbConnection();
    $sql="SELECT * FROM courseinfo";
    $result=mysqli_query($conn,$sql);
    return $result;
}
?>