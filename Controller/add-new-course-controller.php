<?php
require_once('message-controller.php');
if(isset($_POST['submit'])){
    $name=$_POST['coursename'];
    $id=$_POST['courseid'];
    echo $id;
}

?>