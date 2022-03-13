<?php
	$conn = mysqli_connect("localhost", "root", "","quanlidathang")
	or die("Could not connect: " . mysqli_connect_error());
	if (session_id() === '') {
			session_start();
	}
		if (isset($_POST["themdc"])) {
			$dc=$_POST['DiaChi'];
			$mskh=$_POST['MSKH'];
			$sql="INSERT INTO `diachikh` (`DiaChi`, `MSKH`) VALUES ('$dc', '$mskh');";
			mysqli_query($conn,$sql);
			header('location:giohang.php');}
?>


<html>
	<head>
		<title>VStrore</title>
		<meta charset="utf-8"/> 
		<link rel="stylesheet" type="text/css" href="style_top.css">
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
	</head>
<body>
	<?php include_once(__DIR__ . '/header.php'); ?>
	<div class="main">
		<input type="hidden" class="form-control" name="MSKH" value="<?= $kh['MSKH']; ?>" >
		<input type="text" class="form-control" name="DiaChi" placeholder="Nhập địa chỉ khác!">
		<a><button type="submit" class="btn btn-primary float-right" name="themdc" onclick="alert('Đã update địa chỉ khách!');">Thêm địa chỉ</button></a>
	</div>