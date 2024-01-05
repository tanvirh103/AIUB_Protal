<?php
require_once('../Model/user-info-model.php');
require_once('message-controller.php');
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $father=$_POST['fathersname'];
    $mother=$_POST['mothersname'];
    $bg=$_POST['bloodgroup'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $remarks=$_POST['remarks'];

    $result=addnewfaculty($name,$email,$father,$mother,$password,$dob,$bg,$remarks);
    if($result!=false){
        message("New Faculty added");
    }else{
        message("You can't Add faculty");
    }
    
}

?>