<?php
function message($message){
    session_start();
    $_SESSION['message']=$message;
    header('location:../View/message.php');
}

?>