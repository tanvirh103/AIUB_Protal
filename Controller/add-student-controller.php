<?php
require_once('../Model/user-info-model.php');
require_once('message-controller.php');
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $father=$_POST['fathersname'];
    $mother=$_POST['mothersname'];
    $bg=$_POST['bloodgroup'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $result=addnewstudent($name,$email,$father,$mother,$password,$dob,$bg);
    if($result!=false){
        message("New Student added");
    }else{
        message("You can't Add Student");
    }
}

?>