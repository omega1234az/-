<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION["UserName"])){
    header("Location: index.php");
}
if(isset($_GET["doLogout"]) && $_GET["doLogout"]==True){
    unset($_SESSION["UserName"]);
    header("Location: index.php");
}
include("connection.php");
$sqluser="select * from member where memUserName='$_SESSION[UserName]'";
$queryuser=mysqli_query($conn,$sqluser);
$result=mysqli_fetch_array($queryuser);

//echo "ยินดีด้อนรับคุณ : " .$_SESSION["UserName"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-info text-white=50">
        <div>
            <img src="image/2.png" width="45"></img>
            <label>SAVING KPT</label>
        </div>
        <ul class="navbar-nav ml-auto" style="margin-right:20px">
            <li class="nav-item">
                <a class="nav-link" href="">ทุนเรือนหุ้น</a>
            </li>
            <li>
                <a class="nav-link" href="">หนี้เงินกู้</a>
            </li>
            <li>
                <a class="nav-link" href="">ผู้คำประกัน</a>
            </li>
            <li>
                <a class="nav-link" href="">ปันผลเฉลี่ยคืน</a>
            </li>
            <li>
                <a class="nav-link" href="">เรียกเก็บรายเดือน</a>
            </li>
        </ul>
        <ul class="navbar-nav" style="margin-right:10px;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    <img src="image/HTML5.png" width="30">Yggdrasil</img>
                </a>
                <div class="dropdown-menu">
                    <div class="dropdown-item" style="text-align:center;">
                        <img src="image/3.png" width="50">
                    </div>
                    <a class="dropdown-item" href="#">ข้อมูลส่วนบุคคล</a>
                    <a class="dropdown-item" href="?doLogout=True">ลงชื่ออจากระบบ</a>
                </div>
            </li>
        </ul>
    </nav>

<button class="btn btn-danger" name="logout" onclick="window.location.href='exp72.php?doLogout=True;'">Logout</button>
</body>
</html>