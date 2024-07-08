<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donate System</title>
    <link rel="stylesheet" type="text/css" href="css/s234.css">
    <style type="text/css">
        td{
            width:200px;
            height:50px;
            color:white;
        }
    </style>

</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h1><a href="admin-home.php" style= "text-decoration:none;color:white">Blood Bank Management System</a></h1></div>
            <div id="body">
                <?php
                $un=$_SESSION['un'];
                if(!$un){
                    header("location:index.php");
                }
                ?>
                <h3>Stock-blood-list</h3><br>
                <center><div id="form">
                    <table>
                        <tr>
                            <td><center><b><font color="blue">Name</font></b></center></td>
                            <td><center><b><font color="blue">Qty</font></b></center></td>
                        </tr>
                        <tr>
                            <td><center>O+</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bggroup='O+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>
                        <tr>
                            <td><center>O-</center></td>
                            <td><center><?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bggroup='O-'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>
                        <tr>
                            <td><center>A+</center></td>
                            <td><center><?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bggroup='A+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>
                        <tr>
                            <td><center>A-</center></td>
                            <td><center><?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bggroup='A-'");
                                echo $row=$q->rowcount();
                                ?>
                        </center></td>
                        </tr>
                    </table>
                </div>
            </center>
            </div>
            <div id="footer"><h3 align="center">Copyright @ty b.voc 2024   <a href="https://github.com/yasinvahora56" style="color:white"><i class="fa-brands fa-square-github"></i></a></h3>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/70560ef20d.js" crossorigin="anonymous"></script>
</body>
</html>