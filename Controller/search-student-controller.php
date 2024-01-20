<?php
require_once('../Model/user-info-model.php');
require_once('../Model/user-info-model.php');
$id=$_COOKIE['flag'];
$row1=getinfo($id);
$name = $_REQUEST['name'];
$result = searchstudent($name);
if (mysqli_num_rows($result) > 0) {
    echo "
    <table width=\"auto\" cellspacing=\"0\" cellpadding=\"15\" bordercolor=\"#004ca3\" border=\"1\"><font family=\"times new roman\" size=\"4\">
    <tr><td>Profile Picture</td>
    <td>Fullname</td>
    <td>Father's Name</td>
    <td>Mother's Name</td>
    <td>Blood Group</td>
    <td>Email</td>
    <td>Date Of Birth</td>";
    if($row1['role']=="Admin"||$row1['role']=="Faculty"||$row1['role']=="Admin HR"){
        echo"<td>Action</td>";
        }
        echo"</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $sid=$row['userId'];
        $profilepicture = $row['profilePicture'];
        $fullname = $row['userName'];
        $father = $row['fathersName'];
        $mother = $row['mothersName'];
        $dob = $row['dob'];
        $email = $row['email'];
        $bg = $row['bloodGroup'];
        echo "  
        <tr>
        <td><img src=\"../$profilepicture\" alt=\"profile picture\" width=\"150\" height=\"150\"></td>
        <td>$fullname</td>
        <td>$father</td>
        <td>$mother</td>
        <td>$bg</td>
        <td>$email</td>
        <td>$dob</td>";
        if($row1['role']=="Admin"||$row1['role']=="Faculty"||$row1['role']=="Admin HR"){
            echo"<td><a href=\"viewprofileinfo.php?sid=$sid\"><input type=\"submit\" value=\"View Profile Info\"></td>";
        }
            echo"</tr>";
    }
}else{
    echo"<tr><td>NO Match Found</td></tr>";
}
