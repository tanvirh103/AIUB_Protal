<?php
require_once('../Model/enroll-info-model.php');
require_once('message-controller.php');
$userid=$_COOKIE['flag'];
if(isset($_POST['submit'])){
$courseid=$_POST['courseid'];
$coursename=$_POST['coursename'];
$sectionid=$_POST['sectionid'];
$sectionname=$_POST['sectionname'];
$room=$_POST['roomnumber'];
$time=$_POST['time'];
$teacherid=$_POST['teacherid'];
$teachername=$_POST['teachername'];
$result=enrollcourse($userid,$courseid,$coursename,$sectionid,$sectionname,$room,$time,$teacherid,$teachername);
if($result!=false){
    message("Course Registration Successful");
}else{
    message("Course Registratiion Failed");
}
}
?>