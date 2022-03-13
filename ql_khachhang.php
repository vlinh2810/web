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
            $sqlkh = "select * from khachhang ";
            $querySP = mysqli_query($conn,$sqlkh);
            while ($row = mysqli_fetch_array($querySP, MYSQLI_ASSOC)) {
                $khachhang[]= array( 
                    'MSKH' => $row['MSKH'],
                    'HoTenKH' => $row['HoTenKH'],
					'TenDangNhap' => $row['TenDangNhap'],
                    'MatKhau' => $row['MatKhau'],                   
                    'DiaChi' => $row['DiaChi'],                   
                    'SoDienThoai' => $row['SoDienThoai'],                   
                    'Email' => $row['Email']                                      
                );             
            };
			if (isset($_POST["update"])) {
				$dc = $_POST['diachi'];
				$mskh= $_POST['MSKH'];
				$sql = "UPDATE `khachhang` SET `DiaChi` = '$dc' WHERE `khachhang`.`MSKH` = $mskh;";
				mysqli_query($conn,$sql);
				$sql1="INSERT INTO `diachikh` (`DiaChi`, `MSKH`) VALUES ('$dc', '$mskh');";
				mysqli_query($conn,$sql1);
				header('location:ql_khachhang.php');
				
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
                    <h3 style="color:#FF8400">QUẢN LÝ KHÁCH HÀNG</h3></div>
			<div class="card shadow mb-4" style="min-height: 800px;">
                    <div class="card-body" style="padding:0">
                        <div class="table-responsive" style="color:white">
                            <table id="tblDanhSach" class="table mx-auto table-bordered table-hover" style="font-size:18px">
                                <thead class="thead-dark">
                                    <tr class="text-center align-middle" style="background:#c0c0c0">
                                        <th width="5%">MSKH</th>
                                        <th width="25%">Họ Tên</th>
                                        <th width="10%">Tài Khoản</th>
                                        <th width="10%">SĐT</th>
										<th width="35%">Địa Chỉ</th>
                                        <th width="10%">Email</th>                                   
                                        <th width="5%">Thực thi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($khachhang as $kh) : ?>
                                        <tr><form action="" method="post">
											<td class="text-center align-middle"><?= $kh['MSKH'] ?></td>
											<input type="hidden" class="form-control" id="MSKH" name="MSKH" value="<?= $kh['MSKH']; ?>" >
                                            <td class="text-center align-middle"><?= $kh['HoTenKH']; ?></td>
                                            <td class="text-center align-middle"><?= $kh['TenDangNhap']; ?></td>
                                            <td class="text-center align-middle"><?= $kh['SoDienThoai']; ?></td>
                                            <td class="text-center align-middle"><input type="text" class="form-control" name="diachi" value="<?= $kh['DiaChi']; ?>"></td>
                                            <td class="text-center align-middle"><?= $kh['Email']; ?></td>
                                            <td >
                                                <div class="row" style="height:50%;margin:10 0 5 0">
													<a><button type="submit" style="width:100%;color:white" class="btn btn-danger" name="update" onclick="alert('Đã update địa chỉ khách!')" title="UPDATE địa chỉ"><i class="fas fa-tools"></i></button></a>
												</div>
                                            
												<div class="row" style="height:50%;margin:10 0 5 0">
													<a href="delete.php?MSKH=<?= $kh['MSKH'];?>&X=kh" style="text-decoration:none">
														<button type="button" style="width:100%;color:white" class="btn btn-danger" title="XÓA"><i class="fas fa-trash-alt"></i></button>                                               
													</a>
												</div>
                                            </td></form>
                                        </tr>    
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