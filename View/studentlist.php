<?Php
require_once('../Model/user-info-model.php');
$result=getallstudent();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>
    <title>Studnet List</title>
</head>
<body>
    <center><font family="times new roman" size="6">Student List</font><br><hr width="20%" color="#004ca3">
    <br><input type="text" id="search" placeholder="Search by Fullname" onkeyup="search(this.value)" size="25"><br><br>
    <font family="times new roman" id="message"></font>
    </center>
    <center><br><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1"><font family="times new roman" size="4">
        <?php if(mysqli_num_rows($result)>0){
         echo"<tr><td>Profile Picture</td>
            <td>Fullname</td>
            <td>Father's Name</td>
            <td>Mother's Name</td>
            <td>Blood Group</td>
            <td>Email</td>
            <td>Date Of Birth</td>           
            </tr>";
            while($row=mysqli_fetch_assoc($result)){
                $profilepicture=$row['profilePicture'];
                $fullname=$row['userName'];
                $father=$row['fathersName'];
                $mother=$row['mothersName'];
                $dob=$row['dob'];
                $email=$row['email'];
                $bg=$row['bloodGroup'];
                
             echo"
                <tr>
                <td><img src=\"../$profilepicture\" alt=\"profile picture\" width=\"150\" height=\"150\"></td>
                <td>$fullname</td>
                <td>$father</td>
                <td>$mother</td>
                <td>$bg</td>
                <td>$email</td>
                <td>$dob</td>
                </tr>";
            }
        }else{
            echo"No Student Found";
        }
        ?></font>
        </table>
    </center>
</body>
</html>