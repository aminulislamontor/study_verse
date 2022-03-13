<?php

require('../header.php');

?>


<html>

<head>
    <title>Home Page</title>
</head>

<body>
    <center>
        <fieldset style="width:600px">

            <table>
                <tr>
                    <td>

                        <h1>Welcome home!!! <br>
                            <center>Student <?php echo $_SESSION['current_user'][1] ?> </center>
                        </h1>

                    </td>

                </tr>


            </table>

        </fieldset>
    </center>
    <br></br>

    <table align="right">
        <tr>
            <td>
                <a href="../../controller/logout.php"> logout </a>
            </td>
        </tr>
    </table>
    <br></br>


    <table align="center">
        <tr>
            <td>

                <center>
                    <fieldset align="center" style="width:300px">
                        <legend> Course </legend>

                        <table align="center">
                            <tr>
                                <td>

                                    <a href="../student/searchcourse.php"> Search any Course </a>

                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <a href="showAllcourse.php"> Enroll Course </a>

                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <a href="../student/enrolledcourselist.php"> Enrolled Course List </a>

                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <a href="../student/coursefeedback.php"> Course Feedback </a>

                                </td>
                            </tr>



                        </table>
                    </fieldset>
                </center>

            </td>

            <br></br>

            <td>

                <center>

                    <fieldset align="center" style="height:63 ; width:300px">
                        <legend> View Profile </legend>

                        <table align="center">
                            <tr>
                                <td>

                                    <a href="updateownprofile.php"> Profile </a>

                                </td>
                            </tr>

                        </table>
                    </fieldset>

                </center>

            </td>

            <td>

                <center>

                    <fieldset align="center" style="height:63 ; width:300px">
                        <legend> Payment </legend>

                        <table align="center">
                            <tr>
                                <td>

                                    <a href="pastpaymenthistory.php"> Past Payment History </a>

                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <a href="buybooks.php"> Buy Books </a>

                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </center>
            </td>
        </tr>
    </table>
</body>