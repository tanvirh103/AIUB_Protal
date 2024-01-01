<?php
require_once('database.php');
    function checkuser($email,$password){
        $conn=dbConnection();
        $sql="SELECT * FROM userinfo WHERE Email='$email' AND Password='$password'";
        $result=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($result);
        if($count==1){
            $row=mysqli_fetch_assoc($result);
            return $row;
        }else{
            return false;
        }
    }
?>