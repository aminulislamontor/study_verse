<?php

require('../header.php');
require('../../models/studenttxt/con.php');

?>

<html>

<head>
  <title>Student list</title>
</head>

<body>

  <a href="../../views/manager/phome.php"> back </a> | 
  <?php echo "vhejalllll for admin" ?>
  <a href="../../controller/managercheck/logout.php"> logout </a>
  <br><br>

  <table border="1">
    <tr>
      <td>ID</td>
      <td>USERNAME</td>
      <td>PASSWORD</td>
      <td>EMAIL</td>
      <td>DOB</td>
      <td>GENDER</td>
      <td>DEGREE</td>
      <td>BLOODGROUP</td>
      <td>USERTYPE</td>
      <td>ACTION</td>

    </tr>
    <?php
    $con = getConnection();

    $sql = "select * from student_reg_table";
    $result = $con->query($sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>

          <td><?= $row['id'] ?></td>
          <td><?= $row['userName'] ?></td>
          <td><?= $row['password'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['dob'] ?></td>
          <td><?= $row['gender'] ?></td>
          <td><?= $row['degree'] ?></td>
          <td><?= $row['bloodgroup'] ?></td>
          <td><?= $row['userType'] ?></td>

          <td>
            <a href="../../views/student/studentedit.php?id=<?= $row['id'] ?>"> EDIT </a> |
            <a href="../../views/student/studentdelete.php?id=<?= $row['id'] ?>"> DELETE </a>
          </td>
        </tr>

    <?php 
		}
    } 

    ?>

  </table>

</body>

</html>