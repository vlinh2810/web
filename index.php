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
<body>
	<?php include_once(__DIR__ . '/header.php'); ?>
	<div class="main">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="./anh/anh1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./anh/anh2.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./anh/anh3.jpg" class="d-block w-100" alt="...">
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
		<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top:5px">
			  <div class="col chu">
				<a href="./danhmucsp.php?MLH=1"><div class="card h-100">
					<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
					  </div>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="./anh/nam/1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>GI??Y TH??? THAO NAM</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/nam/d1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>D??P NAM</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/nam/s1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>SANDAL NAM</h5>
						  </div>
						</div>
					  </div>
					</div>
				  <div class="card-body">
					<h5 class="card-title">GI??Y - D??P NAM</h5>
					<p class="card-text">Mang phong c??ch tr??? trung, n??ng ?????ng. VStrore mang ?????n nhi???u s???n ph???m ch???t l?????ng, ??ang d???ng phong c??ch d??nh cho c??c b???n nam.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">Last updated 1 week ago</small>
				  </div>
				</div></a>
			  </div>
			  <div class="col chu">
				<a href="./danhmucsp.php?MLH=2"><div class="card h-100">
					<div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
					  </div>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="./anh/nu/t1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>GI??Y TH??? THAO N???</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/nu/c1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>GI??Y CAO G??T</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/nu/s1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>SANDAL N???</h5>
						  </div>
						</div>
					  </div>
					</div>
				  <div class="card-body">
					<h5 class="card-title">GI??Y - D??P N???</h5>
					<p class="card-text">Phong c??ch n??? t??nh, tr??? trung. Nh???ng m???u m?? ?????p m???t, c?? t??nh xu???t hi???n ng??y c??ng nhi???u. H??y ?????n v???i VStrore ????? c??ng tr???i nghi???m nh??!!!.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				  </div>
				</div></a>
			  </div>
			  <div class="col chu">
				<div class="card h-100">
				  <a href="./danhmucsp.php?MLH=3"><div class="card h-100">
					<div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
					  </div>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="./anh/balo/bc1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>BALO T??I ??EO CH??O</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/balo/bc2.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>T??I ??EO CH??O</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/balo/bl1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>BALO</h5>
						  </div>
						</div>
					  </div>
					</div>
				  <div class="card-body">
					<h5 class="card-title">BST BALO ?????C ????O C???A VSTORE</h5>
					<p class="card-text">????n m??a m???i, kh??ng g?? quan tr???ng h??n thay ?????i phong c??ch m???i ????? r?????c th??m th???t nhi???u may m???n cho ch??nh m??nh. B??? s??u t???p balo m???i nh???t c???a VStrore s??? gi??p b???n!!</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				  </div>
				</div></a>
			  </div>
		</div>
	</div>
	</div>
	<?php include_once(__DIR__ . './footer.php'); ?>
</body>
<script src="jquery.min.js""></script>
<script src="./bootstrap/js/bootstrap.min.js""></script>
</html>