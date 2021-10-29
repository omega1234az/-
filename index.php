<?php
require("connection.php");
//include("connection.php");
if(!isset($_SESSION)){
    session_start();
}
if(isset($_POST["Login"])){
    $un=$_POST["uName"];
    $pw=$_POST["pWord"];
    $sql="select * from name where memUserName='$un' and memPassWord='$pw'";
    echo $sql;
    
    $query=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($query);
    if($row>0){
        $_SESSION["UserName"]=$un;
        header("Location: view.php");
    }else{
        echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านของคุณไม่ถูกต้อง')</script>;";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>


</head>
<body>
<nav class="navbar navbar-expend-sm bg-info text-white">
        <div>
            <img src="image/3.png" style="width:40px;">
            <lable class="ml-1">SAVING KPT</lable>
        </div>
        <ul class="navbar-nav ml-auto" style="margin-right:20px">
            <li class="nav-item">
                
                <a class="nav-link" href="register.php"><img src="image/2.png" style="width:40px;">สมัครสมาชิก</a>
            </li>
</nav>
    <div class="row">
        <div class="col-sm-2 col-md-4"></div>
            <div class="col-sm-8 col-md-4">
                <div class="card" style="margin:10px">
                    <div class="card-header bg-success text-white">
                        <label>ลงชื่อเข้าใช้งานระบบ</label>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>UserName</label>
                                <input name="uName" class="form-control" type="text" placeholder="ชื่อผู้ใช้งาน">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="pWord" class="form-control" type="password" placeholder="รหัสผ่าน">
                            </div>
                            <div class="card-footer bg-success">
                                <div class="form-group" style=text-align:center;>
                                    <button class="btn btn-primary" type="submit" name="Login">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <div class="col-sm-2 col-md-8"></div>
            </div>
        </div>
    </div>
</body>
</html>
