<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange Blood List</title>
    <link rel="stylesheet" type="text/css" href="css/s234.css">
    <style type="text/css">
        td{
            width:200px;
            height:20px;
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
                <h2>Exchange Blood List</h2>
                <center><div id="form"  style= "width:1050px; height:360px;">
                    <table bgcolor="black">
                        <tr bgcolor="white">
                            <td><center><b><font color="red">Name</font></b></center></td>
                            <td><center><b><font color="red">Father's Name</font></b></center></td>
                            <td><center><b><font color="red">address</b></font></center></td>
                            <td><center><b><font color="red">City</b></font></center></td>
                            <td><center><b><font color="red">Age</b></font></center></td>
                            <td><center><b><font color="red">Bgroup</font></b></center></td>
                            <td><center><b><font color="red">Exchange Bgroup</font></b></center></td>
                            <td><center><b><font color="red">E-mail</font></b></center></td>
                            <td><center><b><font color="red">Mobile Number</font></b></center></td>
                        </tr>
                        <?php
                        $q=$db->query("SELECT * FROM exchange_b");
                        while($r1=$q->fetch(PDO::FETCH_OBJ))
                        {
                            ?>
                            <tr bgcolor="white">
                            <td><center><font color="black"><?= $r1->name; ?></font></center></td>
                            <td><center><font color="black"><?= $r1->fname; ?></font></center></td>
                            <td><center><font color="black"><?= $r1->address; ?></font></center></td>
                            <td><center><font color="black"><?= $r1->city; ?></font></center></td>
                            <td><center><font color="black"><?= $r1->age; ?></font></center></td>
                            <td><center><font color="black"><?= $r1->bggroup; ?></font></center></td>
                            <td><center><font color="black"><?= $r1->ebggroup; ?></font></center></td>
                            <td><center><font color="black"><?= $r1->email; ?></font></center></td>
                            <td><center><font color="black"><?= $r1->mno; ?></font></center></td>
                        </tr>
                        <?php
                        }
                        ?>
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