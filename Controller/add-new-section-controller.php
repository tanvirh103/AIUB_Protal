<?php
require_once('../Controller/message-controller.php');
$userid=$_COOKIE['flag'];
if(isset($_POST['submit'])){
    $name=$_POST['course'];
    $courseid=$_POST['courseId'];
    $teachername=$_POST['teacher'];
    $tid=$_POST['teacherid'];
    $sec=$_POST['section'];
    
    echo $tid." ".$courseid;
}
?>