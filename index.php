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
    <link rel="stylesheet" href="css/s234.css">
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h1>Blood Bank Management System</h1></div>
            <div id="body">
                <br><br><br><br><br><br>
                <form action="" method="post">
                <table align="center">
                    <tr>
                    <td width="200px" height="70px"><b>Enter Username</b></td>
                    <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width: 180px; height:30px; border-radius:10px;"></td>
                    </tr>
                    <tr>
                    <td width="200px" height="70px"><b>Enter Password</b></td>
                    <td width="200px" height="70px"><input type="password" name="ps" placeholder="Enter Password" style="width: 180px; height:30px; border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sub" value="login" style="width: 70px; height: 40px; border-radius:5px;"></td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_POST['sub']))
                {
                    $un=$_POST['un'];
                    $ps=$_POST['ps'];
                    $q=$db->prepare("SELECT * FROM `categories` WHERE uname='$un' && pass='$ps'");
                    $q->execute();
                    $res=$q->fetchALL(PDO::FETCH_OBJ);
                    if($res)
                    {
                        $_SESSION['un']=$un;
                        header("Location:admin-home.php");
                        exit;
                    }
                    else{
                        echo "<script>alert('Wrong User')</script>";
                    }
                }

            ?>
            </div>
            <div id="footer"><h3 align="center">Copyright @ty b.voc 2024   <a href="https://github.com/yasinvahora56" style="color:white"><i class="fa-brands fa-square-github"></i></a></h3>
        </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/70560ef20d.js" crossorigin="anonymous"></script>
</body>
</html>