<?php
require_once('../Model/user-info-model.php');
require_once('../Controller/message-controller.php');
$id=$_COOKIE['flag'];
$src=$_FILES['picture']['tmp_name'];
$fileName='Uploads/Profile Picture/'.$_FILES['picture']['name'];
$des='../Uploads/Profile Picture/'.$_FILES['picture']['name'];
move_uploaded_file($src,$des);
$result=updateprofilepicture($fileName,$id);
if($result!=false){
    message("Profile Picture Updated");
}else{
    message("Failed To Update Profile Picture");
}
?>