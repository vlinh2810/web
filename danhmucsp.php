<?php
$conn = mysqli_connect("localhost", "root", "","quanlidathang")
or die("Could not connect: " . mysqli_connect_error());
if (session_id() === '') {
		session_start();
	}
?>
<html>
	<head>
		<head>
		<title>VStrore</title>
		<meta charset="utf-8"/> 
		<link rel="stylesheet" type="text/css" href="style_top.css">
		<link rel="stylesheet" type="text/css" href="product.css">
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
	</head>
	</head>
<body>
	<?php include_once(__DIR__ . '/header.php'); ?> 
						<?php
							$MaLoaiHang = $_GET['MLH'];
							if($MaLoaiHang ==0)
								$sqlSanPham= "select * from hanghoa";
							else	
								$sqlSanPham= "select * from hanghoa where hanghoa.MaLoaiHang=$MaLoaiHang";
							$query = mysqli_query($conn,$sqlSanPham);
							 while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
									$sanpham[]= array( 
										'MSHH' => $row['MSHH'],
										'TenHH' => $row['TenHH'],
										'DuongDan' => $row['DuongDan'],             
										'QuyCach' => $row['QuyCach'],                   
										'Gia' => $row['Gia'],                   
										'SoLuongHang' => $row['SoLuongHang'],                   
										'GhiChu' => $row['GhiChu'],                   
								);             
							};
							?>
	<div class="maind">
				<div class="row" >
								<?php foreach ($sanpham as $sp) : ?>
									<div class="col-md-3 product_single shadow" style="width:25%;margin:30 0 20 0;">
										<div class="product clearfix">
											<div class="product-image">
												<a style="text-decoration:none;" href="./chitiet.php?MSHH=<?= $sp['MSHH'] ?>&MLH=<?= $MaLoaiHang ?>" >
													<img src=<?= $sp['DuongDan']  ?>  class="imgg" alt="...">
													<img class="imgHV imgg" src=<?= $sp['DuongDan']  ?> alt="...">
												</a>
											</div>
											<div class="product-desc">
												<div class="product-title">
													<h4><a style="text-decoration:none;" href="./chitiet.php?MSHH=<?= $sp['MSHH'] ?>&MLH=<?= $MaLoaiHang ?>"><?= $sp['TenHH']  ?></a></h4>
												</div>
												<div class="product-price">
													<ins><?= $sp['Gia']  ?>₫ </ins>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach?>
				</div>			
	</div>
	<?php include_once(__DIR__ . './footer.php'); ?>
</body>
<script src="jquery.min.js""></script>
<script src="./bootstrap/js/bootstrap.min.js""></script>
</html>