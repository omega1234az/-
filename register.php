<?php
if(isset($_POST["regist"])){
    include("connection.php");
    $sqlMem="insert into name(memname,memusername,memPassword) values('$_POST[mName]','$_POST[uName]','".md5($_POST[pWord])."')";
   $queryMem=mysqli_query($conn,$sqlMem);
  header("Location: exp7.php");
  
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
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-info text-white">
        <img class="" src="image/3.png" style="width:35px">
        <label class="ml-1">Saving KPT</label>
    </nav>
    <div class="row mt-1">
        <div class="col-sm-3 col-md-3"></div>
        <div class="col-12 col-sm-6 col-md-6">
            <div class="card">
                <div class="card-header bg-warning">
                    <img src="image/user-icon.png" style="width:40px">
                    <label style="color:white">สมัครสมาชิก</label>
                </div>
                <div class="card-body">
                    <form method="POST" onsubmit="JavaScript:return checkdata();">
                        <div class="form-group">
                            <label>ชื่อสกุล</label>
                            <input type="text" class="form-control" id="mName" name="mName" placeholder="ชื่อสกุล">
                        </div>
                        <div class="form-group">
                            <label>ชื่อผู้ใช้</label>
                            <input type="text"  class="form-control" id="uName" name="uName"  placeholder="ชื่อผู้ใช้">
                        </div>
                        <div class="form-group">
                            <label>รหัสผ่าน</label>
                            <input type="password" name="pWord" id="pWord" class="form-control" placeholder="รหัสผ่าน">
                            <input type="password" name="pWordConfirm" id="pWordConfirm" class="form-control mt-2" placeholder="ยืนยันรหัสผ่าน">
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <button class="btn btn-primary" type="submit" name="regist" >สมัครสมาชิก</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3" ></div>
    </div>
    <script>
            function checkdata(){
                if(document.getElementById("mName").value==""){
                    alert("คุณไม่ได้ป้อนชื่อนาม-สกุล");
                    return false;
                    }
                if(document.getElementById("uName").value==""){
                    alert("คุณป้อนชื่อผู้ใช้ไม่ถูกต้อง");
                    return false;
                    }
                if(document.getElemenById("pWord").value=="" || document.getElementById("pWordConfirm").value==""){
                    alert("คุณป้อนรหัสผ่านไม่ถูกต้อง")
                    return false;
                    }
                if(document.getElemenById("pWord") != document.getElementById("pWordConfirm")){
                    alert("รหัสผ่านไม่เหมือนกัน")
                    return false;
                    }
                }

</body>
</html>