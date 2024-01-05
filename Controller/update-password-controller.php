<?php
require_once('message-controller.php');
require_once('../Model/user-info-model.php');
$id=$_COOKIE['flag'];
if(isset($_POST['submit'])){
    $old=$_POST['oldpassword'];
    $new=$_POST['newpassword'];
    $confirm=$_POST['confirmpassword'];
    if($new==$confirm){
        $result=updatepassword($id,$new);
        if($result!=false){
            message("Password Changed");
        }else{
            message("Failed to change password");
        }
    }else{
        message("New Password Does't Match");
    }
}
?>