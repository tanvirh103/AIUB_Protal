<?php
require_once('../Model/user-info-model.php');
if(isset($_POST['submit'])){
    $email=$_POST['username'];
    $password=$_POST['password'];
    $result=checkuser($email,$password);

    if($result!=false){
        if($result['status']=="Active"){
            setcookie($result['Role'],$result['userId'],time()+3600,'/');
        }else{
            echo"Your are ban from the system";
        }
    }else{
        echo "User Not found";
    }
}
?>