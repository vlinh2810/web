<?php
$conn = mysqli_connect("localhost", "root", "","quanlidathang")
or die("Could not connect: " . mysqli_connect_error());
if (session_id() === '') {
		session_start();
	}
?>
<html>
	<head>
		<title>VStrore</title>
		<meta charset="utf-8"/> 
		<link rel="stylesheet" type="text/css" href="style_top.css">
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
		<script src="dk.js"></script>
	</head>
<body>
	<?php 
         if (isset($_POST["btn_dk"])) {        
            $username = $_POST["mail"];
            $password=md5($_POST["pass"]);
			$nhaplaipassword=md5($_POST["rpass"]);
            $ht = $_POST["hoten"];
            $sdt = $_POST["sdt"];
            $email = $_POST["mail"];       
            $sqlDangky = "INSERT INTO khachhang (HoTenKH,TenDangNhap, MatKhau,SoDienThoai,Email) VALUES ('$ht','$username', '$password','$sdt','$email');";
            $query = mysqli_query($conn,$sqlDangky);
            echo '<script>alert("Đăng ký thành công!");</script>';
            echo '<script>location.href = "./index.php#dn";</script>';    
            }
    ?>
            
	<?php include_once(__DIR__ . '/header.php'); ?>
	
	<div class="maind">
		<div class="text-center" style="width:50%;margin:auto;box-shadow:2px 6px 12px;background-color:#e6e6e6;padding:5px;">
                    <img src="logoft.png"/>
                    <h3 style="color:#FF8400">ĐĂNG KÝ TÀI KHOẢN</h3>
			<form action="#" method="POST">
				<div>
					EMAIL: (<i class="fas fa-star-of-life" style="color:red"></i>)
				</div>
				<div class="rf">
					<input class="form-control" placeholder="User@gail.com" name="mail" type="text" value="">
				</div>
				<div>
					PASSWORD: (<i class="fas fa-star-of-life" style="color:red"></i>)
				</div>
				<div class="rf">
					<input class="form-control" placeholder="********" name="pass" type="password" value="">
				</div>
				<div>
					NHẬP LẠI PASSWORD: (<i class="fas fa-star-of-life" style="color:red"></i>)
				</div>
				<div class="rf">
					<input class="form-control" placeholder="********" name="rpass" type="password" value="">
				</div>
				<div>
					HỌ VÀ TÊN: (<i class="fas fa-star-of-life" style="color:red"></i>)
				</div>
				<div class="rf">
					<input class="form-control" placeholder="Nguyễn Văn A" name="hoten" type="text" value="">
				</div>
				<div>
					SỐ ĐIỆN THOẠI: (<i class="fas fa-star-of-life" style="color:red"></i>)
				</div>
				<div class="rf">
					<input class="form-control" name="sdt" placeholder="0967494477" type="text" value="">
				</div>
				<div class="rf">
				<button type="submit" name="btn_dk" class="btn btn-primary" onClick="check();" style="width:100%;">ĐĂNG KÝ</button>
				</div>
			</form>
			<div>
				<a href="index.php#dn"><button class="btn" onClick="dn();"  style="width:100%;background-color:#ff3300;color:white">ĐĂNG NHẬP</button></a>
			</div>
        </div>
	</div>
	<?php include_once(__DIR__ . './footer.php'); ?>
</body>
<script src="jquery.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
</html>