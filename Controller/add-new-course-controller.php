<?php
require_once('message-controller.php');
require_once('../Model/course-info-model.php');
if(isset($_POST['submit'])){
    $name=$_POST['coursename'];
    $id=$_POST['courseid'];
    $result=insertcourse($name,$id);
    if($result!=false){
        message("New Course Added");
    }else{
        message("Failed to Add New COurse");
    }
}

?>