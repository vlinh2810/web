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
		<title>QUẢN LÝ SẢN PHẨM</title>
		<link href="./fontawesome/css/all.css" rel="stylesheet">
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="style_top.css">		
	</head>
	<body>
		 <?php 
            $sqlSanPham = "select *,loaihanghoa.TenLoaiHang from hanghoa,loaihanghoa WHERE hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang; ";
            $querySP = mysqli_query($conn,$sqlSanPham);
            while ($row = mysqli_fetch_array($querySP, MYSQLI_ASSOC)) {
                $sanpham[]= array( 
                    'MSHH' => $row['MSHH'],
                    'TenHH' => $row['TenHH'],
					'HinhAnh' => $row['DuongDan'],
                    'TenLoai' => $row['TenLoaiHang'],                   
                    'QuyCach' => $row['QuyCach'],                   
                    'Gia' => $row['Gia'],                   
                    'SoLuongHang' => $row['SoLuongHang'],                   
                    'GhiChu' => $row['GhiChu'],                   
                );             
            };
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
                    <h3 style="color:#FF8400">QUẢN LÝ SẢN PHẨM</h3></div>
			<div class="card shadow mb-4" style="min-height: 800px;">
                    <div class="card-body" style="padding:0">
                        <div class="table-responsive" style="color:white">
                            <table id="tblDanhSach" class="table mx-auto table-bordered table-hover" style="font-size:18px">
                                <thead class="thead-dark">
                                    <tr class="text-center align-middle" style="background:#c0c0c0">
                                        <th width="5%">STT</th>
                                        <th width="20%">Tên SP</th>
                                        <th width="10%">Hình</th>
                                        <th width="5%">Loại</th>
										<th width="30%">Quy cách</th>
                                        <th width="10%">Giá</th>
                                        <th width="5%">Số lượng</th>
                                        <th width="10%">Ghi chú</th>                                    
                                        <th width="5%">Thực thi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($sanpham as $sp) : ?>
                                        <tr>
                                       <td class="text-center align-middle"><?= $i++; ?></td>
                                            <td class="text-center align-middle"><?= $sp['TenHH']; ?></td>
                                            <td class="text-center align-middle">
                                                
												<img src="<?= $sp['HinhAnh']; ?>" class="img" width="100px" height="100px" />
                                                
                                            </td>
                                            <td class="text-center align-middle"><?= $sp['TenLoai']; ?></td>
                                            <td class="text-center align-middle"><?= $sp['QuyCach']; ?></td>
                                            <td class="text-center align-middle"><?= $sp['Gia']; ?></td>
                                            <td class="text-center align-middle"><?= $sp['SoLuongHang']; ?></td>
                                            <td class="text-center align-middle"><?= $sp['GhiChu']; ?></td>
                                            <td >
                                                <div class="row" style="height:50%;margin:10 0 5 0">
													<a href="edit.php?MSHH=<?= $sp['MSHH'];?>" style="text-decoration:none">
														<button type="button" style="width:100%;color:white" class="btn btn-danger" title="SỬA THÔNG TIN SẢN PHẨM"><i class="fas fa-tools"></i></button>
													</a>
												</div>
                                            
												<div class="row" style="height:50%;margin:10 0 5 0">
													<a href="delete.php?MSHH=<?= $sp['MSHH'];?>&X=sp" style="text-decoration:none">
														<button type="button" style="width:100%;color:white" class="btn btn-danger" title="XÓA SẢN PHẨM"><i class="fas fa-trash-alt"></i></button>                                               
													</a>
												</div>
                                            </td>
                                            
                                    <?php endforeach ?>
                                </tbody>
                            </table>
						</div>
					<!-- Kết thúc contenct -->
					</div>
					<div class="rf">
						<a href="create.php"> <button type="submit" name="dangky" class="btn btn-primary" style="width:100%;">Thêm Sản Phẩm</button></a>
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