<?php

require('../header.php');



?>

<html>

<head>
    <title>Home Page</title>
</head>

<body>
    <center>
        <fieldset style="height:80;width:600px">
            <table>
                <tr>
                    <td>
                        <h1>Welcome home!!! <br>
                            <center>Admin <?php echo $_SESSION['current_user'][1] ?> </center>
                        </h1>
                    </td>
                </tr>
            </table>
        </fieldset>

    </center>
    <br></br>

    <table align="center">
        <tr>
            <td>
                <center>
                    <fieldset align="center" style="width:300px">
                        <legend>User Profile List</legend>
                        <table align="center">
                            <tr>
                                <td>
                                    <a href="../student/student_list.php"> Student's Profile List </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../teacher/teacher_list.php"> Teacher's Profile List </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../manager/userlist.php"> Manager List </a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </center>
            </td>

            <td>
                <center>
                    <fieldset align="center" style=" height:63;width:300px">
                        <legend>Course Approval </legend>
                        <table align="center">
                            <tr>
                                <td>
                                    <a href="courseApproval.php">Course List</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </center>
            </td>
        </tr>
    </table>


    <br></br>

    <table align="center">
        <tr>
            <td>
                <center>
                    <fieldset align="center" style="width:300px">
                        <legend>Add user </legend>

                        <table align="center">
                            <tr>
                                <td>
                                    <a href="../manager/addManager.php"> Add Manager </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../teacher/teacherreg.php"> Add Teacher </a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </center>
            </td>
        </tr>
    </table>

    <br></br>

    <table align="center">
        <tr>
            <td>
                <center>
                    <fieldset align="center" style="width:300px">
                        <legend> Set Fees </legend>
                        <table align="center">
                            <tr>
                                <td>
                                    <a href="courseApproval.php">Set Course Fee</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../manager/teachers_fee.php">Set Teachers Fee</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </center>
            </td>
        </tr>
    </table>

    <br></br>

    <center>

        <fieldset align="center" style="height:63 ; width:300px">
            <legend> Manage Profile </legend>
            <table align="center">
                <tr>
                    <td>
                        <a href="editAdminProfile.php"> Profile </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../controller/logout.php"> logout </a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </center>
</body>

</html>