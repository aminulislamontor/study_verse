<?php

require('../header.php');

?>

<html>
<head>
    <title>Course list</title>
</head>

<body>
    <h3> Search Course : </h3>
    <a href="../../views/student/shome.php"> Back </a> |
	<a href="../../controller/logout.php"> Logout </a>
	<br><br>
    <form method="POST" action="">
        <table>
            <tr>
                <td> Course Name </td>
                <td><input type="text" name="name" value=""></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Remove" value="Search"></td>

            </tr>
        </table>
    </form>
</body>

</html>