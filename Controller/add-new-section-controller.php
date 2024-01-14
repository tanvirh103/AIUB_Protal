<?php
require_once('../Controller/message-controller.php');
require_once('../Model/course-info-model.php');
require_once('../Model/user-info-model.php');
require_once('../Model/section-info-model.php');
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

    $result2=addnewsection($courseid,$name,$tid,$teachername,$sec,$room);
    if($result2!=false){
        message("New Section added");
    }else{
        message("You can't Add Section");
    }
    
}
?>