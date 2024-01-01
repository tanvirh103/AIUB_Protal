<?php
function dbConnection(){
    $conn=mysqli_connect('localhost','root','','AIUB_Portal');
    return $conn;
}
?>