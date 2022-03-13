<?php
$conn = mysqli_connect("localhost", "root", "","quanlidathang")
or die("Could not connect: " . mysqli_connect_error());
if (session_id() === '') {
		session_start();
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>QUẢN LÝ KHÁCH HÀNG</title>
		<link href="./fontawesome/css/all.css" rel="stylesheet">
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="style_top.css">		
	</head>
	<body>
		 <?php 
            $sqlDH = "select SoDonDH , khachhang.HoTenKH,dathang.DiaChi,khachhang.SoDienThoai, NgayDH, NgayGH,TrangThai from dathang, khachhang where dathang.MSKH=khachhang.MSKH";
            $queryDH = mysqli_query($conn,$sqlDH);
            while ($row = mysqli_fetch_array($queryDH, MYSQLI_ASSOC)) {
                $donhang[]= array( 
                    'SoDonDH' => $row['SoDonDH'],
                    'HoTenKH' => $row['HoTenKH'],
                    'DiaChi' => $row['DiaChi'],
                    'SoDienThoai' => $row['SoDienThoai'],                   
                    'NgayDH' => $row['NgayDH'],                   
                    'NgayGH' => $row['NgayGH'],                                    
                    'TrangThai' => $row['TrangThai'],                                    
                );             
            }
			if (isset($_POST["update"])) {
				$sdh= $_POST['sdh'];
				$tt= $_POST['ttdh'];
				if($tt==0)
					$sql = "UPDATE `dathang` SET `TrangThai` = 1 WHERE `dathang`.`SoDonDH` = $sdh;";
				else{
					if($tt==1)
						$sql = "UPDATE `dathang` SET `TrangThai` = 2 WHERE `dathang`.`SoDonDH` = $sdh;";
					else
						$sql = "UPDATE `dathang` SET `TrangThai` = 0 WHERE `dathang`.`SoDonDH` = $sdh;";}
				$query=mysqli_query($conn,$sql);
				header('location:ql_donhang.php');
			}
        ?>
		<div style="width:100%">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-bottom:0;padding-top:0;" >
				<div class="container-fluid" style="background-color:#1b1f2e;padding-left:120;padding-right:120;width:100%;">
					<div>
					  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						  <a class="nav-link" href="tel:0967494477" style="text-decoration:none;color:white"><i class="fas fa-phone" style="color:white;padding-right:5px"></i>0967494477</a>
						</li>
						<li class="nav-item ">
						  <a class="nav-link" href="mailto:vstore@gmail.com" style="text-decoration:none;color:white;"><i class="fas fa-envelope" style="color:white;padding-right:5px"></i>VStrore@gmail.com</a>
						</li>
					  </ul>
					</div>
					<div class="d-flex">
					  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul1">
						<li class="nav-item menu">
						  <a class="nav-link" href="index.php" style="color:white;border-left:1px solid white">TRANG CHỦ</a>
						</li>
						<li class="nav-item menu">
						  <a class="nav-link" href="shop.php#gioithieu" style="color:white;border-left:1px solid white">GIỚI THIỆU</a>
						</li>
						<li name="dm" class="nav-item dropdown menu">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
								DANH MỤC
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="ql_sanpham.php">Quản lý sản phẩm</a></li>
								<li><a class="dropdown-item" href="ql_khachhang.php">Quản lý khách hàng</a></li>
								<li><a class="dropdown-item" href="ql_donhang.php">Quản lý đơn đặt hàng</a></li>
							</ul>
						</li>
					  </ul>
					</div>
				</div>
		</nav>
	</div>
			
		<div class="maind">
		<div class="text-center shadow" style="width:100%;margin:auto;padding:5px;background-color:#ffeb99">
                    <img src="logoft.png"/>
                    <h3 style="color:#FF8400">QUẢN LÝ ĐƠN ĐẶT HÀNG</h3></div>
			<div class="card shadow mb-4" style="min-height: 800px;">
                    <div class="card-body" style="padding:0">
                        <div class="table-responsive" style="color:white">
                            <table id="tblDanhSach" class="table mx-auto table-bordered table-hover" style="font-size:18px">
                                <thead class="thead-dark">
                                    <tr class="text-center align-middle" style="background:#c0c0c0">
                                        <th width="5%">Mã Đơn</th>
                                        <th width="20%">Tên Khách</th>
                                        <th width="8%">SĐT</th>
										<th width="13%">Ngày Đặt</th>
                                        <th width="13%">Ngày Giao</th>                                   
                                        <th width="23%">Địa Chỉ</th>
										<th width="11%">Trạng Thái</th>
										<th width="7%">Thao Tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($donhang as $dh) : ?>
                                        <tr>
                                           
                                            <td class="text-center align-middle">
                                                <?= $dh['SoDonDH']; ?>
                                            </td>
                                            <td class="text-center align-middle">
                                                <?= $dh['HoTenKH']; ?>
                                            </td>
                                            <td class="text-center align-middle"><?= $dh['SoDienThoai']; ?></td>
                                            <td class="text-center align-middle"><?= $dh['NgayDH']; ?></td>
                                            <td class="text-center align-middle"><?= $dh['NgayGH']; ?></td>
											<td class="text-center align-middle"><?= $dh['DiaChi']; ?></td>
                                            <td class="text-center align-middle">
                                                <?php if ($dh['TrangThai'] == 0) : ?>
                                                    <span class="align-middle text-center" style="color:#ff3333"> Chưa xử lý</span>
                                                <?php else : ?>
													<?php if ($dh['TrangThai'] == 1) : ?>
														<span class="align-middle text-center" style="color:#00ff00"> Đã xử lý</span>
													<?php else : ?>
														<span class="align-middle text-center" style="color:#ff3333"> Đã hủy</span>
													<?php endif; ?>
												<?php endif; ?>
                                            </td>
											<td class="align-middle" style="text-align:center" >
												<form method="post">
													<input type="hidden" class="form-control" name="sdh" value="<?= $dh['SoDonDH']; ?>">
													<input type="hidden" class="form-control" name="ttdh" value="<?= $dh['TrangThai']; ?>">
													<button type="submit" style="width:100%;color:white;" class="btn btn-danger" name="update" onclick="alert('Đã thay đổi trạng thái đơn hàng!')" title="Thay đổi trạng thái"><i class="far fa-check-circle"></i></button>
												</form>
												<div>
											</td>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
						</div>
					<!-- Kết thúc contenct -->
					</div>
				</div>
		</div>
		<div class="text-center">
				Copyright © VSTORE. All Rights Reserved.
		</div>
	</body>
	<script src="./jquery.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>	
</html>