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
    function getinfo($id){
        $conn=dbConnection();
        $sql="SELECT * FROM userinfo WHERE userId='$id'";
        $result=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($result);
        if($count==1){
            $row=mysqli_fetch_assoc($result);
            return $row;
        }
    }
    function addnewstudent($name,$email,$password,$dob){
        $conn=dbConnection();
        $sql="INSERT INTO userinfo VALUES('','$name','Uploads/default.jpg','$email','$password','Sutdent','$dob','Active','')";
        $result=mysqli_query($conn,$sql);
        return true;
    }
    function addnewfaculty($name,$email,$password,$dob,$remarks){
        $conn=dbConnection();
        $sql="INSERT INTO userinfo VALUES('','$name','Uploads/default.jpg','$email','$password','Faculty','$dob','Active','$remarks')";
        $result=mysqli_query($conn,$sql);
        return true;
    }
?>