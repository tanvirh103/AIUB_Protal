<?php
require_once('../Model/section-info-model.php');
$name = $_REQUEST['name'];
$result=searchcourse($name);
if (mysqli_num_rows($result) > 0) {
    echo "
    <table width=\"auto\" cellspacing=\"0\" cellpadding=\"15\" bordercolor=\"#004ca3\" border=\"1\"><font family=\"times new roman\" size=\"4\">
    <tr><td>Course Name</td>
    <td>Teacher Name</td>
    <td>Section</td>
    <td>Room Number</td>          
    <td>Day Time</td></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $coursename = $row['courseName'];
        $teachername = $row['teacherName'];
        $section = $row['sectionName'];
        $room = $row['roomNumber'];
        $time=$row['dayTime'];
        echo "  
        <tr>
        <td>$coursename</td>
        <td>$teachername</td>
        <td>$section</td>
        <td>$room</td>
        <td>$time</td></tr>";
    }
}else{
    echo"<tr><td>No Section Found</td></tr>";
}

?>