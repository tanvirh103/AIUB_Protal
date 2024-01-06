<?php
require_once('../Model/user-info-model.php');
require_once('../Controller/message-controller.php');
$id=$_COOKIE['flag'];
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $bloodgrp=$_POST['bg'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $result=updateuserinfo($id,$name,$fathername,$mothername,$bloodgrp,$dob,$email);
    if($result!=false){
        message("Information Updated");
    }else{
        message("Failed To Update Information");
    }
}
?>