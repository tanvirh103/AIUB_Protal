<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Faculty</title>
</head>
<body>
<center><font family="times new roman" size="5">Add New Faculty</font><br><hr color="#004ca3" width="30%" bordercolor="#004ca3"><br></center>
    <center>
        <form action="../Controller/add-faculty-controller.php" method="post">
        <table border="1" width="30%" align="center" bordercolor="#004ca3" cellpadding="15" cellspacing="0">
            <tr><td><center><font family="times new roman">
            Username :&nbsp;<input type="text" name="username" size="40"><br><br>
            Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" size="40"><br><br>
            Password :&nbsp;<input type="password" name="password" size="40"><br><br>
            Date Of Birth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" name="dob" align="left"><br><br>
            Faculty Category:&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="remarks" id="remarks">
                <option selected>Select Faculty Group</option>
                <option value="OSA">OSA</option>
                <option value="PROFESSOR">PROFESSOR</option>
                <option value="ASSOCIATE PROFESSOR">ASSOCIATE PROFESSOR</option>
                <option value="SENIOR ASSISTANT PROFESSOR">SENIOR ASSISTANT PROFESSOR</option>
                <option value="ASSISTANT PROFESSOR">ASSISTANT PROFESSOR</option>
                <option value="SENIOR LECTURER">SENIOR LECTURER</option>
                <option value="LECTURER">LECTURER</option>
            </select><br><br>
            <button name="submit">Create New account</button><br><br>
            </font></center></td></tr>
        </table>
        </form>
    </center>
</body>
</html>