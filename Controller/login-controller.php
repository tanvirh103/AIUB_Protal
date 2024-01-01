<?php
require_once('../Model/user-info-model.php');
require_once('message-controller.php');
if(isset($_POST['submit'])){
    $email=$_POST['username'];
    $password=$_POST['password'];
    $result=checkuser($email,$password);

    if($result!=false){
        if($result['status']=="Active"){
            setcookie("flag",$result['userId'],time()+3600,'/');
            header('location:../View/dashboard.php');
        }else{
            message("Your are ban from the system");
        }
    }else{
        message("User Not found");
    }
}
?>