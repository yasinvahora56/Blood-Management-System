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
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h1><a href="admin-home.php" style= "text-decoration:none;color:white">Blood Bank Management System</a></h1></div>
            <div id="body">
                <br>
                <?php
                $un=$_SESSION['un'];
                if(!$un){
                    header("location:index.php");
                }
                ?>
                <h1>Welcome Admin</h1><br><br>
                <ul><br><br>
                    <li><a href="donor-reg.php">Donor Registration</a></li>
                    <li><a href="donor-list.php">Donor List</a></li>
                    <li><a href="stock-blood-list.php">Stock Blood List</a></li>
                </ul><br><br><br><br><br><br>
                <ul>
                    <li><a href="out-stock-blood-list.php">Out stock Blood list</a></li>
                    <li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
                    <li><a href="exchange-blood-list1.php">Exchange Blood List</a></li>
                </ul>
            </div>
            <div id="footer"><h3 align="center">Copyright @ty b.voc 2024<a href="https://github.com/yasinvahora56" style="color:white"><i class="fa-brands fa-square-github"></i></a></h3>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/70560ef20d.js" crossorigin="anonymous"></script>
</body>
</html>