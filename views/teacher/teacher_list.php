<?php

require('../header.php');
require('../../models/teachertxt/con.php');

?>

<html>

<head>
  <title>teacher list</title>
</head>

<body>

  <a href="../../views/manager/home.php"> back </a> | 
  
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

    $sql = "select * from (plz use here manager table name)";
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
            <a href="../../views/teacher/teacheredit.php?id=<?= $row['id'] ?>"> EDIT </a> |
            <a href="../../views/teacher/teacherdelete.php?id=<?= $row['id'] ?>"> DELETE </a>
          </td>
        </tr>

    <?php 
		}
    } 

    ?>

  </table>

</body>

</html>