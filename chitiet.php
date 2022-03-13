<?php
$conn = mysqli_connect("localhost", "root", "","quanlidathang")
or die("Could not connect: " . mysqli_connect_error());
if (session_id() === '') {
		session_start();
	}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>VStrore</title>
	<meta charset="utf-8"/> 
	<link rel="stylesheet" type="text/css" href="style_top.css">	
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link href="./fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
	<?php 
					$id = $_GET['MSHH'];
					$id1= $_GET['MLH'];
					$sqlSanPham = "select * from hanghoa where MSHH=$id;";
					$querySanPham = mysqli_query($conn, $sqlSanPham);
					$sqlSanPham = "select *,loaihanghoa.TenLoaiHang from hanghoa,loaihanghoa WHERE hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang and MSHH=$id ";
					$querySP = mysqli_query($conn,$sqlSanPham);
					while ($row = mysqli_fetch_array($querySP, MYSQLI_ASSOC)) {
						$sanpham[]= array( 
							'MSHH' => $row['MSHH'],
							'TenHH' => $row['TenHH'],
							'DuongDan' => $row['DuongDan'],
							'TenLoai' => $row['TenLoaiHang'],                   
							'QuyCach' => $row['QuyCach'],                   
							'Gia' => $row['Gia'],                   
							'SoLuongHang' => $row['SoLuongHang'],                   
							'GhiChu' => $row['GhiChu'],                   
						);             
					}
	?>
		<!-- Phần header -->
			 <?php include_once(__DIR__ . './header.php'); ?>
		<!-- Kết thúc header -->
		<div class="maind">
			<?php foreach ($sanpham as $sp) : ?>
				<div class="main-frame">
					<div class="container overflow-hidden" >
						<div class="row gx-5">
							<div class="col shadow">
								<div><img src=<?= $sp['DuongDan']  ?>  width="100%"></div>
							</div>
							<div class="col shadow" style="border:2px;border-radius:5px">
								<div style="border-bottom:2px solid gray;10 0 10 0;"></div>
								<div style="height:auto;margin:10 10 10 10;text-align:center">
									<span style="color: #000;text-transform: uppercase;font-size: 30px;">
										<b><?= $sp['TenHH'] ?></b>
									</span>
								</div>
								<div style="border-bottom:2px solid gray;10 0 10 0;"></div>
								<div style="height:auto;margin:10 10 10 10">
									<span style="color: #4d4d4d;font-size: 20px;">
										<b>MÃ SẢN PHẨM: </b> <span style="font-size:18;color:#ff751a"><?= $sp['MSHH'] ?></span>
									</span>
								</div>
								<div style="border-bottom:2px solid gray;10 0 10 0;"></div>
								<div style="height:auto;margin:10 10 10 10">
									<?php if ($sp['SoLuongHang']>0):?>
										<span style="color: #4d4d4d;font-size: 20px;">
											<b>SỐ LƯỢNG HÀNG: </b> <span style="font-size:18;color:#00cc00"><?= $sp['SoLuongHang'] ?></span>
										</span>
									<?php else:?>
										<span style="color: #4d4d4d;font-size: 20px;">
											<b>SỐ LƯỢNG HÀNG: </b> <span style="font-size:18;color:#f23b26">Hết hàng</span>
										</span>
									<?php endif; ?>
									
								</div>
								<div style="border-bottom:2px solid gray;10 0 10 0;"></div>
								<div style="height:auto;margin:10 10 10 10">
									<span style="color: #4d4d4d;font-size: 20px;">
										<b>QUY CÁCH: </b> <span style="font-size:18;color:#2e2e2e"><?= $sp['QuyCach'] ?></span>
									</span>
								</div>
								<div style="border-bottom:2px solid gray;10 0 10 0;"></div>
								<div style="height:auto;margin:10 10 10 10">
									<span style="color: #4d4d4d;font-size: 20px;">
										<b>GHI CHÚ: </b> <span style="font-size:18;color:#2e2e2e"><?= $sp['GhiChu'] ?></span>
									</span>
								</div>
								<div style="border-bottom:2px solid gray;10 0 10 0;"></div>
								<div style="height:auto;margin:10 10 10 10">
									<span style="color: #4d4d4d;font-size: 20px;">
										<b>GIÁ: </b> <span style="font-size:18;color:red"><?= $sp['Gia'] ?>₫</span>
									</span>
								</div>
								<div style="border-bottom:2px solid gray;10 0 10 0;"></div>
								<div style="height:auto;margin:10 0 10 0">
									<form action="themgiohang.php" method="post">
										<div class="row bar-info-product d-flex product-display-block" >
											<div class="col-md-3 col-xs-12 product-content-button" style="padding: 0 0 10px 15px;width:100%">
												<input type="hidden" value="<?= $sp['MSHH'];?>" name="MSHH" id="MSHH">
												<input type="hidden" value="<?= $sp['TenHH'];?>" name="TenHH" id="TenHH">
												<input type="hidden" value="<?= $sp['DuongDan'];?>" name="DuongDan" id="DuongDan">
												<input type="hidden" value="<?= $sp['Gia'];?>" name="Gia" id="Gia">
												<input type="hidden" value="<?= $id1;?>" name="MLH" id="Gia">
												<div class="row align-items-start">
													<div class="col">
														<label style="font-weight:bold;margin-top:0px" for="num" class="sp-price-text" >Số lượng : </label>
														<input type="number" name="soluong" id="soluong" min="1" max="<?=$sp['SoLuongHang']?>" value="1"  style="width:50px;">
													</div>
													<div class="col">
														<label style="font-weight:bold;margin-top:0px" for="num" class="sp-price-text" >Size : </label>
														<?php if ($_GET['MLH']==3):?>
															<input type="number" name="size" id="size" min="1" max="1" value="1"  style="width:50px;" disabled>
														<?php else:?>
															<input type="number" name="size" id="size" min="35" max="44" value="35"  style="width:50px;">
														<?php endif; ?>
													</div>
												 </div>
											</div>
										</div>
									
										<div class="rf">
											<button type="submit" name="themgiohang" onclick="alert('Sản phẩm đã được thêm vào giỏ!')" class="btn btn-primary" style="width:100%;">Thêm Vào Giỏ Hàng</button>
										</div>
									</form>
									<div class="rf">
										<a href="./giohang.php"> <button type="button" name="vetc" class="btn btn-primary" style="width:100%;">Xem Giỏ Hàng</button></a>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					<hr>
					<div class="container" style="margin-top:20px;">
							<div class="title"> <p>Sản phẩm liên quan</p></div>
							<?php
							$id = $_GET['MSHH'];
							$id1= $_GET['MLH'];
							$sql = "select MaLoaiHang from hanghoa where hanghoa.MSHH=$id";
							$querySP = mysqli_query($conn,$sql);
							$row = mysqli_fetch_array($querySP, MYSQLI_ASSOC);
							$MaLoaiHang=$row['MaLoaiHang'];
						
							//var_dump($row);die();
							$sqlSanPham= "select * from hanghoa where hanghoa.MaLoaiHang=$MaLoaiHang and hanghoa.MSHH!=$id";
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
						  <div class="row">
							<?php $i=0?>
							 <?php foreach ($sanpham as $sp) : ?>
								<?php $i++; 
									if($i==5){
										break;
									}
								?>
								        
							<div class="col-md-3">
								<div class="card" >
										<div class="card-body">
											<a style="text-decoration:none;color:black" href="./chitiet.php?MSHH=<?= $sp['MSHH'] ?>&MLH=<?= $id1 ?>">
												<img src="<?= $sp['DuongDan']  ?>" style="width:100%;" class="card-img-top" alt="...">
												<h5 class="card-title" style="font-size:15px;"><?= $sp['TenHH']  ?></h5>
												<a href="./chitiet.php?MSHH=<?= $sp['MSHH'] ?>&MLH=<?= $id1 ?>" class="btn btn-primary" style="background:#d5e7f6;color:black;font-size:10px;"><?= $sp['Gia']  ?></a>
											</a>
										</div>
									
								</div>
							</div>
							<?php endforeach ?>
						
						  </div>
					</div>
						
			</div>
			</div>
		</div>
			 <?php include_once(__DIR__ . './footer.php'); ?>
		<!-- Kết thúc footer -->
</body>
<script src="jquery.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
</html>
	