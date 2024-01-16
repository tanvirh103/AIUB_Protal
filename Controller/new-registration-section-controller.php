<?php 
if(isset($_POST['submit'])){
    $coursename=$_POST['course'];
    $section=$_POST['section'];
    echo $coursename."     ".$section;
}
?>