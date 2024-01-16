<?php
require_once('../Model/section-info-model.php');
require_once('../Model/user-info-model.php');
$result=getallsection();
$result1=getallsection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script>
    function searchsection(str){
    if(str==""){
        document.getElementById('message').innerHTML="Please search any ID";
        return;
    }
    console.log(str);
    let xhttp=new XMLHttpRequest();
    xhttp.open('post','../Controller/registration-section-controller.php',true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send('name='+str);
    xhttp.onload=function(){
        document.getElementById('message').innerHTML=this.responseText
    }
}  
    </script>
    <title>Add New Course</title>
</head>
<body>
    <center><font family="times new roman" size="6">Add New Section</font><hr width="20%" color="#004ca3"></center>
    <center><br><form action="../Controller/new-registration-section-controller.php" method="post"><table border="1" width="auto" cellpadding="25" cellspacing="0" bordercolor="#004ca3"><font family="times new roman" size="4">
        <tr><td><center>
            Course Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="course" onchange="searchsection(this.value)"><option selected>Select Course</option>
                <?php if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $name=$row['courseName'];
                        echo"<option value=\"$name\">$name</option>";
                        if(count($row)<0){
                            break;
                        }
                    }
                    echo" </select><br><br>"; 
                }
                ?>
            Available Section:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="section" id="message"><option selected>Select Section</option></select><br><br>
            <input type="submit" name="submit" value="Add this Course">
        </center></td></tr>
    </font></table></form></center>
</body>
</html>