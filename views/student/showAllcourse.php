<?php

require('../header.php');

?>

<html>

<head>
    <title>Course list</title>
</head>

<body>

    <a href="shome.php"> back </a> |
    <a href="../../controller/managercheck/logout.php"> logout </a>
    <br><br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Course Name</td>
            <td>Status</td>
            <td>Fee</td>
            <td align="Center">ACTION</td>
        </tr>
        <?php
        $file = fopen('../../models/teachertxt/courseList.txt', 'r');

        while (!feof($file)) {

            $user = fgets($file);
            $userArray = explode('|', $user);

            if ($userArray[0] != null && $userArray[1] != null && $userArray[2] != null) {
        ?>
                <tr>
                    <td><?= $userArray[0] ?></td>
                    <td><?= $userArray[1] ?></td>
                    <td><?= $userArray[2] ?></td>
                    <td><?= $userArray[3] ?></td>
                    <td>
                        <a href="./courseEnroll.php?id=<?= $userArray[0] ?>"> Enroll Course </a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>