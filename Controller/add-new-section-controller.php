<?php
require_once('../Controller/message-controller.php');
require_once('../Model/course-info-model.php');
require_once('../Model/user-info-model.php');
$userid=$_COOKIE['flag'];
if(isset($_POST['submit'])){
    $name=$_POST['course'];
    $result=getcourseid($name);
    if($result!=false){
        $courseid=$result['courseId'];
    }else{
        message("Course Not Found");
    }
    $teachername=$_POST['teacher'];
    $result1=getteacherid($teachername);
    if($result1!=false){
        $tid=$result1['userId'];
    }else{
        message("Teacher Not Found");
    }
    $sec=$_POST['section'];
    $room=$_POST['room'];

    
    
    echo"Course name:".$name;
    echo"Course name:".$courseid;
    echo"Teacher name:".$teachername;
    echo"Teacher ID:".$tid;
    echo"Section Name:".$sec;
    echo"Room Number:".$room;
    
}
?>