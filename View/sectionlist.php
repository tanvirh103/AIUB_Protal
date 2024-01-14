<?Php
require_once('../Model/section-info-model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['flag'])){
    message("You cann't access the page");
}
$result=getallsection();
$id=$_COOKIE['flag'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script>
    function section(str){
    if(str==""){
        document.getElementById('message').innerHTML="Please search any ID";
        return;
    }
    let xhttp=new XMLHttpRequest();
    xhttp.open('post','../Controller/search-section-controller.php',true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send('name='+str);
    xhttp.onload=function(){
        document.getElementById('message').innerHTML=this.responseText
    }
}
    </script>
    <title>Section List</title>
</head>
<body>
    <center><font family="times new roman" size="6">Section List</font><br><hr width="15%" color="#004ca3">
    <br><input type="text" id="search" placeholder="Search by Course ID" onkeyup="section(this.value)" size="25"><br><br>
    <font family="times new roman" id="message"></font>
</center>
    <center><br><table width="auto" cellspacing="0" cellpadding="15" bordercolor="#004ca3" border="1"><font family="times new roman" size="4">
        <?php if(mysqli_num_rows($result)>0){
         echo"<tr><td>Course Name</td>
            <td>Teacher Name</td>
            <td>Section</td>
            <td>Room Number</td>";
            while($row=mysqli_fetch_assoc($result)){
                $coursename=$row['courseName'];
                $teachername=$row['teacherName'];
                $section=$row['sectionName'];
                $room=$row['roomNumber'];
             echo"<tr>
                <td>$coursename</td>
                <td>$teachername</td>
                <td>$section</td>
                <td>$room</td>";
            }
        }
        ?></font>
        </table>
    </center>
</body>
</html>