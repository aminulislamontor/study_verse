<?php
include('../header.php');

$id = $_GET['id'];

$file = fopen('../../models/teachertxt/courseList.txt', 'r');

while (!feof($file)) {
    $user = fgets($file);
    $userArray = explode('|', $user);
    if ($userArray[0] == $id) {
        break;
    }
}
?>

<html>

<head>
    <title>Edit User</title>
</head>

<body>

    <a href="courseApproval.php"> Back </a> |
    <a href="../../controller/managercheck/logout.php"> logout </a>
    <br><br>

    <form method="POST" action="../../controller/studentcheck/courseEnrollcheck.php">
        <input type="hidden" name="id" value="<?= $id ?>" />

        <fieldset>
            <legend>Add new User</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?= $userArray[1] ?>"></td>
                </tr>
                <tr>
                    <td>Fee</td>
                    <td><input type="text" name="fee" value="<?= $userArray[3] ?>"></td>
                </tr>
                <tr>
                        <td>Enroll Course</td>
                        <td>
                            <input type="radio" name="status" value="Enrolled">Enroll
                        </td>
                    </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="update" value="Enroll Course"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>