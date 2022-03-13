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
	</head>
	<style>
			.div-giaodich{
				display: none;
			}
	</style>
<body>
	<?php include_once(__DIR__ . '/header.php'); ?>
	<div class="maind">
				<?php 
					$giohang=[];
					if(isset($_SESSION['giohang'])){
						$giohang=$_SESSION['giohang'];
					}
					else
						$giohang=[];
				?>
				<div class="main-frame">
					<div class="div-dathang">
					<!--
						<div class="main-frame-top ">
							<div class="title"><p>Giỏ hàng</p></div>
							<div class="col-md-9 col-xs-12 bar-buy-product product-content-button" style="margin-left:3px;margin-top:10px;width:auto">
								<div id="button-cart-redirect" data-loading-text="Đang tải..." class="btn btn-mua col-md-5 product-content-button-ml" style="width: 144px;margin-right:10px;">Xóa hết sản phẩm
								</div>
								<div id="button-cart" data-loading-text="Đang tải..." class="btn btn-them col-md-5 add-cart-orange" style="width: 144px;padding-left: 0px;">
								Tiếp tục mua hàng
								</div>
							</div>
						</div>
						-->
						<div class="main-frame-bottom ">
						        <h1 style="text-align: center; padding-top:20px;border-bottom:2px solid gray;color:#4d4d4d;">GIỎ HÀNG</h1>

							<div class="container py-4">
								<form method="post">
									<table class="table table-striped table-hover table-responsive-sm" id="tbl" >
										<thead>
											<tr>
												<th class="text-center" >
													STT
												</th>
												<th class="text-center">
													Ảnh
												</th>
												<th class="text-center">
													Tên sản phẩm
												</th>
												<th class="text-center">
													Size
												</th>
												<th class="text-center">
													Giá
												</th>
												<th class="text-center">
													Số lượng
												</th>
												<th class="text-center">
													Thành tiền
												</th>
												<th class="text-center">
													Thao tác
												</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$i = 1; 
												$tongtt = 0;
											?>
											<?php foreach($giohang as $sp): ?>
												<?php $tongtt += $sp['thanhtien']; ?>
											<tr >
												<td class="align-middle text-center">
													<?= $i++; ?>                 
												</td>
												<td class="align-middle" style="width: 100px;">
													<img src="<?= $sp['DuongDan']; ?>" class="img-fluid" width="100px" />
												</td>
												<td class="align-middle text-center" >
													<?= $sp['TenHH']; ?>
												</td>
												<td class="align-middle text-center" >
													<?= $sp['size']; ?>
												</td>
												<td class="align-middle text-right" style="text-align:center">
													 <?= number_format($sp['Gia'], 0, ".", ","); ?> VNĐ
												</td>
												<td class="align-middle" width="100px" >
													<input type="number" style="text-align:center" name="soluong" disabled id="soluong" value="<?= $sp['soluong'] ?>" class="form-control">
												</td>
												<td class="align-middle text-right" style="text-align:center">
													<?= number_format($sp['thanhtien'], 0, ".", ","); ?> VNĐ
												</td>
												<td class="align-middle text-canter" style="text-align:center" >
													<a href="xoagiohang.php?MSHH=<?= $sp['MSHH'] ?>" class="btn btn-warning">
														<i style="color:red"class="fa fa-trash" aria-hidden="true"></i>
													</a>
												</td>
											</tr>
											<?php endforeach?>
										</tbody>
											<tfoot>
												<tr>
													<td></td>
													<td colspan="7"  style="font-weight:bold;font-size:20px;text-align:right">Tổng tiền: <?= number_format($tongtt, 0, ".", ","); ?> VNĐ</td>
													
												</tr>
											</tfoot>
									</table>
								</form>
							<div class="row" >
								<div class="col-md" >
									<?php if(isset($_SESSION['email'])): ?>
										<?php if(isset($_SESSION['giohang'] )): ?>
											<button style="float:right" onclick="dathang();" class="btn btn-primary">
												Đặt Hàng
											</button>
										<?php else: ?>
											<a href="danhmucsp.php?MLH=0"><button style="float:right;border:0" onclick="alert('Bạn chưa có sản phẩm nào trong giỏ!')" class="btn btn-primary">
												Đặt Hàng
											</button></a>
										<?php endif; ?>
									<?php else: ?>
										<?php
										echo '<script>alert("Hãy đăng nhập để tiếp tục nhé!");</script>';
										echo '<script>location.href = "./index.php#dn";</script>'; ?>
									<?php endif; ?>
								</div>
							</div>
					</div>
				</div>	
				</div>
			</div>
			<!--
				<?php 
            /* Du lieu khach hang */
            $tendangnhap = isset($_SESSION['email'])?$_SESSION['email']:0;
            $sqlKH = "select * from khachhang where Email='$tendangnhap'";
            $queryKH = mysqli_query($conn,$sqlKH);
            while ($row = mysqli_fetch_array($queryKH, MYSQLI_ASSOC)) {
                $khachhang[]= array( 
                    'MSKH' => $row['MSKH'],
                    'HoTenKH' => $row['HoTenKH'],
                    'Email' => $row['Email'],
                    'MatKhau' => $row['MatKhau'],                                      
                    'DiaChi' => $row['DiaChi'],                   
                    'SoDienThoai' => $row['SoDienThoai'],                   
                                       
                );             
            }
			$sqlMS = "select MSKH from khachhang where Email='$tendangnhap'";
			$result = mysqli_query($conn,$sqlMS);
			$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$MS = $rows['MSKH'];
			$sql = "select * from diachikh where MSKH=$MS;";
            $query = mysqli_query($conn,$sql);
            while ($row1 = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $diachi[]= array( 
                    'MaDC' => $row1['MaDC'],
                    'DiaChi' => $row1['DiaChi'],                   
                );         
            }
			if (isset($_POST["btnThanhToan"])) {
				$dc = $_POST['DiaChi'];
				$mskh= $_POST['MSKH'];
				$sql = "UPDATE `khachhang` SET `DiaChi` = '$dc' WHERE `khachhang`.`MSKH` = $mskh;";
				$query=mysqli_query($conn,$sql);
				header('location:ql_khachhang.php');
			}
			

            /* Du lieu nhan vien */
            $MaNV = rand(1,5);
            $sqlNV = "select * from nhanvien where MSNV=$MaNV;";
            $queryNV = mysqli_query($conn,$sqlNV);
            $rowNV = mysqli_fetch_array($queryNV);
            $MSNV = $rowNV['MSNV'];
            $tenNV = $rowNV['HoTenNV'];
            //var_dump($MSNV); die(); 
			if (isset($_POST["themdc"])) {
			$dc=$_POST['diachi2'];
			$mskh=$_POST['MSKH'];
			$sql="INSERT INTO `diachikh` (`DiaChi`, `MSKH`) VALUES ('$dc', '$mskh');";
			mysqli_query($conn,$sql);}
			
        ?>
		<!-- Thong tin giao dich -->
        <div class="container clearfix div-giaodich">
            <?php foreach($khachhang as $kh): ?>
            <form action="" method="post">
				<div class="row">
                        <div class="col-md-5">
							<h4>Thông tin người mua/nhận hàng:</h4>
							<div class="form-group">
                                <label for="">Tên khách hàng:</label>
                                <input type="hidden" class="form-control" id="MSKH" name="MSKH" value="<?= $kh['MSKH']; ?>" >
                                <input type="email" class="form-control" id="HoTenKH" name="HoTenKH" value="<?= $kh['HoTenKH']; ?>" disabled>
                            </div>
							<div class="form-group">
								<label for="">Số điện thoại:</label>
                                <input type="email" class="form-control" id="SoDienThoai" name="SoDienThoai" value="<?= $kh['SoDienThoai']; ?>" disabled>
							</div>
							<div class="form-group">
								<label for="inputPassword4">Email:</label>
                                <input type="email" class="form-control" id="Email" name="Email" value="<?= $kh['Email']; ?>" disabled>
							</div>
							
							<div class="form-group">
								<label for="inputCity">Tên nhân viên:</label>
                                <input type="email" class="form-control" id="HoTenNV" name="HoTenNV" value="<?= $tenNV; ?>" disabled>
                            </div>
							<div class="form-group">
								<label for="inputCity">Ngày giao:</label>
                                <input type="date" class="form-control" id="NgayGH" name="NgayGH" min="<?= date('Y-m-d', strtotime(' + 1 days')) ?>" value="<?= date('Y-m-d', strtotime(' + 5 days')) ?>">
							</div>
							<div class="form-group">
								<label for="inputAddress">Địa chỉ giao hàng:</label>
								<select class="form-control" name="DiaChi" value="Cần Thơ">
                                        <option>Chọn địa chỉ</option>
                                        <?php foreach ($diachi as $dc) : ?>
                                            <option value="<?= $dc['DiaChi'] ?>"><?= $dc['DiaChi'] ?></option>
                                        <?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
									<input type="hidden" class="form-control" name="MSKH" value="<?= $kh['MSKH']; ?>" >
									<input type="text" class="form-control" name="diachi2" placeholder="Nhập địa chỉ mới!">
									<button type="submit" class="btn btn-primary" name="themdc" onclick="alert('Thêm địa chỉ mới thành công, ấn F5 để reload lại địa chỉ nhé!');"> Thêm địa chỉ</button>
							</div>
							
						</div>
						<div class="col-md-7">
							<h4>Giỏ hàng:</h4>
							<table class="table table-sm  table-responsive-sm" id="tbl">
								<thead>
									<tr>
										<th class="text-center">
											Ảnh
										</th>
										<th class="text-center">
											Tên sản phẩm
										</th>
										<th class="text-center">
											Giá
										</th>
										<th class="text-center">
											Số lượng
										</th>
										<th class="text-center">
											Thành tiền
										</th>
									</tr>
								</thead>
								<tbody>
								
								<?php foreach($giohang as $sp): ?>
									<tr>
										<td class="text-center align-middle">
											<img src="<?= $sp['DuongDan'] ?>" width="100px" height="100px">
										</td>
										<td class="text-center align-middle">
											<?= $sp['TenHH'] ?>
										</td>
										<td class="text-center align-middle">
											<?= number_format($sp['Gia'], 0, ".", ","); ?> VNĐ
										</td>
										<td class="text-center align-middle">
											<?= $sp['soluong'] ?>
										</td>
										<td class="text-center align-middle">
											<?= number_format($sp['thanhtien'], 0, ".", ","); ?> VNĐ
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<td></td>
										<td colspan="4"  style="font-weight:bold;font-size:20px;text-align:right">Tổng tiền: <?= number_format($tongtt, 0, ".", ","); ?> VNĐ</td>
													
									</tr>
								</tfoot>
							</table>
							<button class="btn btn-primary" data-bind="click:Submit" name="btnThanhToan" style="width:100%;color:white">Thanh toán</button>
						</div>
                        
				</div>
            </form>
            <?php endforeach; ?>
        </div>              
    </div>
        <!-- Thong tin giao dich -->

        <!-- Xu ly giao dich -->
        <?php 
            if(isset($_POST['btnThanhToan'])){
                $MSKH = $_POST['MSKH'];
                $NgayDH = date('Y-m-d');
                $NgayGH = $_POST['NgayGH'];
				$DiaChi = $_POST['DiaChi'];
                $sqlInsertKH = "INSERT INTO dathang (MSKH, MSNV, NgayDH, NgayGH,DiaChi) VALUES ($MSKH, $MSNV, ' $NgayDH', '$NgayGH','$DiaChi');";
                $queryInsertDH = mysqli_query($conn,$sqlInsertKH);
                
                $SoDonDH = $conn->insert_id;
                foreach($giohang as $gh){
                    $MSHH = $gh['MSHH'];
                    $GiaDatHang = $gh['Gia'];
                    $soluong = $gh['soluong'];
                    $sqlInsertCTDH = "INSERT INTO chitietdathang (SoDonDH,MSHH,SoLuong,GiaDatHang) VALUES ($SoDonDH,$MSHH,$soluong,$GiaDatHang);";
                    $queryInsertCTDH = mysqli_query($conn,$sqlInsertCTDH);
                    //var_dump($sqlInsertCTDH );die();
                
				$sqlsoluongconlai="select SoLuongHang from hanghoa where MSHH=$MSHH";
				$query=mysqli_query($conn,$sqlsoluongconlai);
				$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
				$tongsoluong=$row['SoLuongHang'];
				$soluongconlai=$tongsoluong-$soluong;
					$sqlInsertHH="UPDATE hanghoa SET SoLuongHang=$soluongconlai WHERE MSHH=$MSHH";
					$queryHH=mysqli_query($conn,$sqlInsertHH);
					
					echo'<script>alert("Khách hàng đã đặt hàng thành công");</script>';
					echo '<script>location.href = "./index.php";</script>';
				}
				unset($_SESSION['giohang']);
            }
        
        
        ?>



        <!-- Xu ly giao dich -->

		</div>
	<?php include_once(__DIR__ . './footer.php'); ?>
</body>
<script>
            function dathang(){
                var x = document.getElementsByClassName("div-dathang");
                x[0].style. display = "none";
                
                var y = document.getElementsByClassName("div-giaodich");
                y[0].style. display = "block";
            }
        function reload(){
            location.reload();
        }			
        </script>

<script src="jquery.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
</html>