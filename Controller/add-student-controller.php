<?php
require_once('../Model/user-info-model.php');
require_once('message-controller.php');
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $result=addnewstudent($name,$email,$password,$dob);
    if($result!=false){
        message("New Student added");
    }
}

?>