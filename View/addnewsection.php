<?php
require_once('../Model/course-info-model.php');
require_once('../Model/user-info-model.php');
$result=getallcourse();
$result1=getallfaculty();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Add New Course</title>
</head>
<body>
    <center><font family="times new roman" size="6">Add New Section</font><hr width="20%" color="#004ca3"></center>
    <center><br><form action="../Controller/add-new-section-controller.php" method="post"><table border="1" width="auto" cellpadding="25" cellspacing="0" bordercolor="#004ca3"><font family="times new roman" size="4">
        <tr><td><center>
            Course Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="course"><option selected>Select Course</option>
                <?php if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $name=$row['courseName'];
                        $id=$row['courseId'];
                        echo"<option value=\"$name\">$name</option>";
                    }
                } 
                echo"<input type=\"hidden\" name=\"courseId\" value=$id>"
                ?>
                
            </select><br><br>
            Teacher Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;<select name="teacher"><option selected>Select Course Teacher</option>
            <?php if(mysqli_num_rows($result1)>0){
                    while($row1=mysqli_fetch_assoc($result1)){
                        $teachername=$row1['userName'];
                        $tid=$row1['userId'];
                        echo"<option value=\"$teachername\">$teachername</option>";
                    }
                } 
                echo"<input type=\"hidden\" name=\"teacherid\" value=\"$tid\">"
                ?>
            </select><br><br>
            Section:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="section" size="20"><br><br>
            <input type="submit" name="submit" value="Add New Section">
        </center></td></tr>
    </font></table></form></center>
</body>
</html>