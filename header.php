<?php            
            if (isset($_POST["btn_dn"])) {
                
                $email = $_POST["mail"];
                $password = md5($_POST["pass"]);
               
              
                if ($email == "" || $password =="") {
                    echo '<script>alert("username hoặc password bạn không được để trống!");</script>';
                }else{
                    $sql = "select * from khachhang where Email = '$email' and MatKhau = '$password' ";
                    $query = mysqli_query($conn,$sql);
                    $num_rows = mysqli_num_rows($query);
                    if ($num_rows==0) {
                        echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng !");</script>';
                    }else{
                        while ( $data = mysqli_fetch_array($query) ) {
                            $_SESSION["HoTenKH"] = $data["HoTenKH"];
                            $_SESSION['DiaChi'] =  $data["DiaChi"];
                            $_SESSION["sdt"] = $data["SoDienThoai"];
                            $_SESSION["email"] = $email;
							$_SESSION["password"] = $data["MatKhau"];
                        }
						echo '<script>alert("Đăng nhập thành công!");</script>';
                        if($email=="Admin@gmail.com")
							echo '<script>location.href = "./ql_sanpham.php";</script>';
                        else
							echo '<script>location.href = "./index.php";</script>';
                    }
                }
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
						  <a class="nav-link" href="shop.php#gioithieu" style="color:white;border-left:1px solid white">GIỚI THIỆU</a>
						</li>
						<li class="nav-item menu">
						  <a class="nav-link" href="shop.php#baohanh" style="color:white">CHÍNH SÁCH BẢO HÀNH</a>
						</li>
						<li class="nav-item menu">
						  <a class="nav-link" href="shop.php#doitra" style="color:white">CHÍNH SÁCH ĐỔI TRẢ</a>
						<li class="nav-item menu">
						  <a class="nav-link" href="shop.php#dosize" style="color:white">CÁCH ĐO SIZE</a>
						</li>
						<?php if(isset($_SESSION['email'])) : $name=$_SESSION['email']?>	
						<li name="ddn" class="nav-item dropdown menu dropstart">
							<a class="nav-link dropdown-toggle" href="#dn" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
							<i class="fas fa-user-circle"></i>
							</a>
							<div class="dropdown-menu" style="z-index:2;background-color:#fffae6;width:220px">
								<p class="dropdown-item"><i class="fas fa-user"></i> <?= $name ?></p>
								<a class="dropdown-item" href="./dangxuat.php" style="text-decoration"><i class="fas fa-door-closed"></i> ĐĂNG XUẤT</a>
							</div>
						</li>
						<?php else : ?>
						<li name="dn" class="nav-item dropdown menu dropstart">
						  <a class="nav-link dropdown-toggle" href="#dn" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
							ĐĂNG NHẬP
						  </a>
							<div class="dropdown-menu" style="z-index:2;width:220px;background-color:#fffae6">
							  <form class="px-2 py-2" action="#" method="post">
								<div class="mb-3">
								  <label for="exampleDropdownFormEmail1" class="form-label">TÀI KHOẢN EMAIL</label>
								  <input type="email" name="mail" class="form-control" id="exampleDropdownFormEmail1" placeholder="VStrore@gmail.com">
								</div>
								<div class="mb-3">
								  <label for="exampleDropdownFormPassword1" class="form-label">MẬT KHẨU</label>
								  <input type="password" name="pass" class="form-control" id="exampleDropdownFormPassword1" placeholder="Mật khẩu">
								</div>
								<div class="mb-3">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="dropdownCheck">
									<label class="form-check-label" for="dropdownCheck">
									  Ghi nhớ tôi
									</label>
								  </div>
								</div>
								<button type="submit" name="btn_dn" class="btn btn-primary">Đăng nhập</button>
							  </form>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="dangky.php">Đăng ký ngay</a>
							</div>
						</li>
						<?php endif; ?>

					  </ul>
					</div>
				</div>
		</nav>
	</div>
	<nav class="navbar sticky-top navbar-light bg-light"style="padding-top: 0px;padding-bottom: 0px;z-index:1">
	  <div style="background-color:#ffeb99;width:100%">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-bottom:0;padding-top:0;" >
			  <div class="container-fluid" style="background-color:#ffeb99;padding-left:120;padding-right:120;width:100%">
				<a href="index.php"><img src="./logo.png"/></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					  <a class="nav-link active" aria-current="page" href="index.php">TRANG CHỦ</a>
					</li>
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						DANH MỤC SẢN PHẨM
					  </a>
					  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="./danhmucsp.php?MLH=0">TẤT CẢ</a></li>
						<li><a class="dropdown-item" href="./danhmucsp.php?MLH=1">GIÀY - DÉP NAM</a></li>
						<li><a class="dropdown-item" href="./danhmucsp.php?MLH=2">GIÀY - DÉP NỮ</a></li>
						<li><a class="dropdown-item" href="./danhmucsp.php?MLH=3">BALO - TÚI</a></li>
					  </ul>
					</li>
					
				  </ul>
				  <form class="d-flex" style="margin-top:10">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit" style="color:black">Search</button>
					<div id="cart">
						<div style="margin-top:5px">
						<a href="giohang.php" style="padding-left:5;text-decoration:none;color:black"><i class="fas fa-cart-plus" style="color:black"></i> GIỎ HÀNG</a>
						<?php
								if(isset($_SESSION['giohang']))
									$sl=count($_SESSION['giohang']);
								else
									$sl=0;	
							 ?>
						<span style="padding:2px 5px;height:10px;line-height:2px"><?=$sl?></span>
						</div>
					</div>
				  </form>
				</div>
			  </div>
		</nav>
	  </div>
	</nav>