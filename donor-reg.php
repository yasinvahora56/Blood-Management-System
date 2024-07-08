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
                <?php
                $un=$_SESSION['un'];
                if(!$un){
                    header("location:index.php");
                }
                ?>
                <h3>Donor-Registration</h3><br>
                <center><div id="form">
                    <form action="" method="post">
                    <table><tr>
                        <td width="200px" height="50px" style="color:white;">Enter Name:</td>
                        <td width="200" height="50px"><input type="text" name="name" placeholder="Enter name"></td>
                        <td width="200px" height="50px" style="color:white;">Enter Father's Name:</td>
                        <td width="200" height="50px"><input type="text" name="fname" placeholder="Enter father name"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px" style="color:white;">Enter Address:</td>
                        <td width="200" height="50px"><textarea name="address"></textarea></td>
                        <td width="200px" height="50px" style="color:white;">Enter City:</td>
                        <td width="200" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px" style="color:white;">Enter Age:</td>
                        <td width="200" height="50px"><input type="text" name="age" placeholder="Enter age"></td>
                        <td width="200px" height="50px" style="color:white;">Enter Blood Group:</td>
                        <td width="200" height="50px">
                            <select name="bggroup">
                                <option>O+</option>
                                <option>O-</option>
                                <option>A+</option>
                                <option>A-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px" style="color:white;">Enter E-mail:</td>
                        <td width="200" height="50px"><input type="email" name="email" placeholder="Enter email-address"></td>
                        <td width="200px" height="50px" style="color:white;">Enter Mobile No:</td>
                        <td width="200" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sub" value="save"></td>
                    </tr>
                    </table>
                    </form>
                    <?php
                    if(isset($_POST['sub'])){
                        $name=$_POST['name'];
                        $fname=$_POST['fname'];
                        $address=$_POST['address'];
                        $city=$_POST['city'];
                        $age=$_POST['age'];
                        $bggroup=$_POST['bggroup'];
                        $email=$_POST['email'];
                        $mno=$_POST['mno'];
                        $q=$db->prepare("INSERT INTO donor_registration (name,fname,address,city,age,bggroup,email,mno) VALUES (:name,:fname,:address,:city,:age,:bggroup,:email,:mno)");
                        $q->bindValue('name',$name);
                        $q->bindValue('fname',$fname); 
                        $q->bindValue('address',$address);
                        $q->bindValue('city',$city);
                        $q->bindValue('age',$age);
                        $q->bindValue('bggroup',$bggroup);
                        $q->bindValue('email',$email);
                        $q->bindValue('mno',$mno);
                        if($q->execute())
                        {
                            echo "<script>alert('Donor registration Successfull')</script>";
                        }else{
                            echo "<script>alert('Donor registration Faild')</script>";
                        }
                    }
                    ?>
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