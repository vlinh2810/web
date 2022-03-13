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
            
            $sqlLoai = "select * from LoaiHangHoa;";
            $query = mysqli_query($conn,$sqlLoai);
            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $loai[]= array( 
                    'maloai' => $row['MaLoaiHang'],
                    'tenloai' => $row['TenLoaiHang'],                   
                );
                //var_dump($loai); die();             
            }
            
            $id = $_GET['MSHH'];
            $sqlSanPham = "select * from hanghoa where MSHH=$id;";
            $querySanPham = mysqli_query($conn, $sqlSanPham);
            $sanphamData = mysqli_fetch_array($querySanPham, MYSQLI_ASSOC); 

               
            
            
            if (isset($_POST["btn_submit"])) {
                $ten = $_POST["TenHH"];
				$name='./hinh/'.basename( $_FILES['DuongDan']['name']);
                $loai = $_POST["maloai"];	
                $quycach = $_POST["QuyCach"];	
                $gia = $_POST["Gia"];		
                $soluong = $_POST["SoLuongHang"];	
                $ghichu = $_POST["GhiChu"];			
                //$sql = "INSERT INTO hanghoa(TenHH,QuyCach,Gia,SoLuongHang,MaLoaiHang,GhiChu ) VALUES ('$ten','$quycach', $gia, $soluong,$loai,'$ghichu');";
				$id = $_GET['MSHH'];
				$sqlSanPham = "select DuongDan from hanghoa WHERE hanghoa.MSHH =$id; ";
				$querySP = mysqli_query($conn,$sqlSanPham);
				$row = mysqli_fetch_array($querySP, MYSQLI_ASSOC);
				$sanpham = $row['DuongDan'];
				if($name!="./hinh/")
				{
				unlink($sanpham);
                $sql = "UPDATE `hanghoa` SET TenHH='$ten', QuyCach='$quycach', Gia='$gia', SoLuongHang=$soluong, MaLoaiHang=$loai, GhiChu='$ghichu', DuongDan='$name' WHERE MSHH=$id;";
				$_FILES['DuongDan']['tmp_name'];
                move_uploaded_file($_FILES['DuongDan']['tmp_name'], $name);}
				else{
					$sql = "UPDATE `hanghoa` SET TenHH='$ten', QuyCach='$quycach', Gia='$gia', SoLuongHang=$soluong, MaLoaiHang=$loai, GhiChu='$ghichu', DuongDan='$sanpham' WHERE MSHH=$id;";
					$_FILES['DuongDan']['tmp_name'];
				}
                // thực thi câu $sql với biến conn lấy từ file connection.php
                mysqli_query($conn,$sql);
                //echo "Nhân viên thêm thành công";
                header('Location: ql_sanpham.php');
                //var_dump($sql); die();
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
			
		<div class="maind" >
			<div class="text-center shadow" style="width:100%;margin:auto;padding:5px;background-color:#ffeb99">
                    <img src="logoft.png"/>
                    <h3 style="color:#FF8400">SỬA TT SẢN PHẨM</h3>
			</div>
			<form name="frmsanpham" id="frmsanpham" method="post" action="" enctype="multipart/form-data" class="mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="TenHH"><b>Tên game:</b></label>
                                    <input type="text" class="form-control" id="TenHH" name="TenHH" value="<?= $sanphamData['TenHH'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="TenLoai"><b>Loại game:</b></label>
                                    <select class="form-control" id="maloai" name="maloai">
                                    <?php foreach($loai as $ls) : ?>
                                           <?php if ($ls['maloai']==$sanphamData['MaLoaiHang']): ?>
                                                <option value="<?= $ls['maloai'] ?>" selected><?= $ls['tenloai'] ?></option>
                                            <?php else: ?>
                                                <option value="<?= $ls['maloai'] ?>"><?= $ls['tenloai'] ?></option>
                                            <?php endif; ?>                                   
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="QuyCach"><b>Quy Cách:</b></label>
                                    <input type="text" class="form-control" id="QuyCach" name="QuyCach" value="<?= $sanphamData['QuyCach'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Gia"><b>Giá:</b></label>
                                    <input type="text" class="form-control" id="Gia" name="Gia"  value="<?= $sanphamData['Gia'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="SoLuongHang"><b>Số lượng hàng:</b></label>
                                    <input type="text" class="form-control" id="SoLuongHang" name="SoLuongHang"  value="<?= $sanphamData['SoLuongHang'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="GhiChu"><b>Ghi Chú</b></label>
                                    <input type="text" class="form-control" id="GhiChu" name="GhiChu"  value="<?= $sanphamData['GhiChu'] ?>">
                                </div>
                            </div>
								<div class="col-md-12">
                                <div class="form-group">
                                    <input  type="file" name="DuongDan" value="<?= $sanphamData['DuongDan'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12" style="text-align: right;margin-top:25px;">
								<a href="sanpham.php" style="text-decoration:none">
									<input type="button"  class="btn btn-primary" value="Về trang quản lý">
								</a>	
                                <input Onclick="sua();" type="submit" name="btn_submit" class="btn btn-primary" value="Sửa sản phẩm">
                            </div>
                         </form>
		</div>
		<div class="text-center">
			Copyright © VSTORE. All Rights Reserved.
		</div>
		
	</body>
	<script language="javascript">
        function sua()
        {
		  alert("Sửa thông tin sản phẩm thành công!!");
        }
      </script>
	<script src="./jquery.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>	
</html>