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
    function addnewstudent($name,$email,$father,$mother,$password,$dob,$bg){
        $conn=dbConnection();
        $sql="INSERT INTO userinfo VALUES('','$name','Uploads/default.jpg','$father','$mother','$email','$password','Student','$dob','$bg','Active','')";
        $result=mysqli_query($conn,$sql);
        return true;
    }
    function addnewfaculty($name,$email,$father,$mother,$password,$dob,$bg,$remarks){
        $conn=dbConnection();
        $sql="INSERT INTO userinfo VALUES('','$name','Uploads/default.jpg','$father','$mother','$email','$password','Faculty','$dob','$bg','Active','$remarks')";
        $result=mysqli_query($conn,$sql);
        return true;
    }

    function getallfaculty(){
        $conn=dbConnection();
        $sql="SELECT * FROM userinfo WHERE role='Faculty'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function getallstudent(){
        $conn=dbConnection();
        $sql="SELECT * FROM userinfo WHERE role='Student'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
?>
