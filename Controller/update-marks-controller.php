<?php
require_once('../Controller/message-controller.php');
require_once('../Model/result-info-model.php');
if(isset($_POST['submit'])){
    $studentid=$_POST['studentid'];
    $sectionid=$_POST['sectionid'];
    $midresult=$_POST['midresult'];
    $finalresult=$_POST['finalresult'];
    
    $result=updateresult($studentid,$sectionid,$midresult,$finalresult);
    
    if($result!=false){
        message("Marks Updated Successfully");
    }else{
        message("Update Marks Opearation Failed");
    }
}
?>