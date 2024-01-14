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

function getcourseid($name){
    $conn=dbConnection();
    $sql="SELECT courseId FROM courseinfo WHERE courseName='$name'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
        if($count==1){
            $row=mysqli_fetch_assoc($result);
            return $row;
        }else{
            return false;
        }
}
?>