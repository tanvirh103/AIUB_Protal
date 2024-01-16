<?php
require_once('../Model/section-info-model.php');
$name = $_REQUEST['name'];
$result=searchsection($name);
if (mysqli_num_rows($result) > 0) {
    echo"<option selected>Select Section</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        $room = $row['roomNumber'];
        echo "$section";
    }
}else{
    echo"<tr><td>No Section Found</td></tr>";
}

?>