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
	<div class="maind">
		<div>
                        <a name="gioithieu"><h4 class="text-center"></a>
                            GIỚI THIỆU VSTORE
                        </h4>                                                
                        <div class="article_detail">
                            <p>Hệ thống giày&nbsp;<strong>VSTORE</strong>&nbsp;chuyên thiết kế và kinh doanh các mặt hàng giày dép cho giới trẻ, là cấu nối cho bạn trẻ cả nước tiếp cận với xu hướng thời trang giày trên thế giới. "Chúng tôi mang đến sự khác biệt!" - Cùng với xu hướng thời trang của thế giới&nbsp;<strong>Hệ thống VSTORE</strong>&nbsp;đã và đang không ngừng đổi mới để mang đến cho các bản trẻ các mẫu giày thời trang độc đáo, mới lạ, để tiên phong cho một phong cách thời trang mới, một phong cách biểu tượng cho giới trẻ trên cả nước.</p>
							<p>Vì thế&nbsp;<strong>VSTORE</strong>&nbsp;đang dần trở thành một cái tên quen thuộc với tất cả các bạn trẻ với những phong cách thời trang hoàn toàn mới lạ, khẳng định cá tính của chính mình.</p>
							<p>Thành lập chưa lâu nhưng VSTORE cam kết sẽ mang lại nhiều ấn tượng cho bạn từ các sản phẩm, thiết kế của VSTORE.</p>
							<p><em>Sự hài lòng của các bạn chính là mục tiêu phấn đấu của chúng tôi.</em></p>
						</div>
        </div>
		<div >
                        <a name="baohanh" ><h4 class="text-center"></a>
                            CHÍNH SÁCH BẢO HÀNH
                        </h4>                                                
                        <div class="article_detail">
                            <div class="article_detail">
                            <p>VSTORE luôn nỗ lực mang đến trải nghiệm mua sắm tuyệt vời dành cho phái đẹp từ sự đa dạng sản phẩm, mẫu mã thời thượng, cửa hàng hiện đại, sang trọng và những dịch vụ hậu mãi không ngừng được hoàn thiện. Theo đó, VSTORE đã cải tiến và áp dụng <strong>Chính sách bảo hành trọn đời </strong>dành cho tất cả khách hàng mua sắm tại các cửa hàng VSTORE&nbsp;trên toàn quốc và mua online tại VSTORE</p>

							<p><strong>Điều kiện áp dụng:</strong></p>

							<p>- Khách hàng vui lòng xuất trình phiếu bảo hành để được áp dụng chính sách bảo hành.</p>

							<p>- Sản phẩm được bảo hành miễn phí trong suốt thời gian sử dụng trong các trường hợp sau:</p>

							<p><strong>1. Đối với khách hàng mua hàng online</strong></p>

							<p>Quý khách có yêu cầu sửa chữa bảo hành có thể mang sản phẩm tới bất kỳ showroom chính hãng của hệ thống VSTORE để sử dụng dịch vụ.</p>

							<p>VSTORE chỉ bảo hành đối với các sản phẩm bị hư hỏng về mặt kĩ thuật như hở keo, sứt chỉ.</p>

							<p><strong>2. Cửa hàng không bảo hành sản phẩm trong các trường hợp sau:</strong></p>

							<ul dir="ltr">
								<li>Giày dép bị hư do lỗi quý khách gây ra như: trầy xước, mòn đế, nóng chảy, thú vật cắn,...</li>
								<li>Giày dép bị hao mòn tự nhiên trong quá trình sử dụng.</li>
								<li>Các loại đế PU tự hủy qua thời gian sử dụng, sản phẩm bị biến dạng hoặc không có phiếu bảo hành.</li>
								<li>Cửa hàng không nhận sửa chữa những sản phẩm quá cũ (da và đế bị lão hóa, không còn độ bám dính của keo,chỉ hoặc không còn phụ kiện thay thế)</li>
							</ul>

							<p>Khách hàng ở xa vui lòng thanh toán phí vận chuyển khi có nhu cầu bảo hành sản phẩm tại VSTORE</p>

							<p>Mọi thắc mắc liên quan tới chính sách bảo hành sản phẩm xin vui lòng liên hệ:</p>

							<p>- Hotline: 1900.39.39.39</p>

							<p>- Email: <a href="mailto:cskh@vstore@gmail.com">VSTORE@gmail.com</a></p>

							</div>
							</div>
		</div>
		<div >
                        <a name="doitra" ><h4 class="text-center"></a>
                            CHÍNH SÁCH ĐỔI TRẢ
                        </h4>                                                
                        <div class="article_detail">
                            <h5><strong>Cam kết sản phẩm:</strong></h5>

							<p>VStore cam kết bán hàng nguyên mới và đảm bảo đúng chất lượng, sản phẩm mà khách hàng nhận được phải nguyên vẹn và đúng với các thông tin mô tả trên website VStore<br>
							Nếu Quý khách nhận được sản phẩm không đúng với cam kết trên, bị lỗi kỹ thuật, không vừa size, không ưng ý, Quý khách vui lòng mang sản phẩm đến cửa hàng nội bộ của VStore &nbsp;hoặc gửi sản phẩm cho VStore trong vòng 07 ngày kể từ thời điểm nhận hàng. VStore xin từ chối hỗ trợ mọi khiếu nại về tình trạng ngoại quan của sản phẩm trong trường hợp Quý khách thông báo cho VStore sau thời gian này.</p>

							<h5><strong>Chính sách đổi hàng:</strong></h5>

							<p>Tất cả hàng hóa mua tại website VStore đều được áp dụng chính sách&nbsp;cho phép khách hàng có thể đổi hàng trong vòng 07 ngày trong trường hợp sản phẩm bị trầy xước&nbsp;khi vận chuyển, giao nhầm, giao thiếu, lỗi kỹ thuật, hay không như cam kết trên website và <strong>chỉ đổi 01 lần duy nhất với giá bằng hoặc cao hơn, nếu thấp hơn sẽ không được hoàn tiền</strong>.<br>
							VStore không áp dụng đổi hàng theo nhu cầu của khách hàng&nbsp;khi sản phẩm không lỗi&nbsp;với các sản phẩm khuyến mại, tại các sự kiện bán hàng khuyến mãi Online, sản phẩm thanh lý,…</p>

							<p><strong>Đối với Khách hàng ở các tỉnh thành khác:</strong><br>
							Khách hàng ở các tỉnh thành khác, vui lòng gửi sản phẩm, vận đơn kèm theo, hóa đơn giá trị gia tăng (nếu có), phụ kiện đi kèm sản phẩm và tặng khuyến mãi kèm theo (nếu có) về địa chỉ: 22 đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ&nbsp;trên bưu phẩm ghi rõ "Đổi hàng lỗi hoặc đổi size". Khách hàng chịu trách nhiệm về&nbsp;trạng thái nguyên vẹn của sản phẩm khi gửi về VStore .Sau khi nhận được sản phẩm chúng tối sẽ tiến hàng kiểm tra chất lượng, quá trình này mất khoảng từ 2 - 3 ngày, VStore sẽ thông báo kết hàng cho khách hàng qua điện thoại và tin nhắn khi việc kiểm tra hoàn tất.</p>

							<h5><strong>Điều khoản và điều kiện đổi hàng:</strong></h5>

							<p>Vui lòng đọc kỹ&nbsp;<strong>Điều kiện đổi hàng</strong>. Yêu cầu đổi hàng được xem là hợp lệ nếu thỏa mãn đầy đủ các điều kiện sau:<br>
							- Chưa qua sử dụng, không bị dơ bẩn. (khi thử các sản phẩm giày dép, bạn nên mang vớ và thử giày trên bề mặt sạch)<br>
							- Sản phẩm được đổi phải được gửi kèm theo <strong>vận đơn được bỏ kèm trong kiện hàng</strong>&nbsp;(còn nguyên vẹn) của VStore<br>
							- Sản phẩm được gửi kèm với đầy đủ phụ kiện (bao gồm cả thẻ bảo hành, vỏ hộp sản phẩm...) và quà tặng kèm (nếu có).<br>
							- Sản phẩm còn trong thời hạn hiệu lực cho phép đổi hàng (<strong>07 ngày</strong> kể từ thời điểm nhận hàng).</p>

							<h5><strong>Phí đổi hàng:</strong></h5>

							<p>Chi phí đổi hàng là hoàn toàn MIỄN PHÍ khi mua sắm tại VStore Tuy nhiên trường hợp Khách hàng muốn đổi sản phẩm vì lí do chủ quan (Không vừa size, không thích màu...), khách hàng vui lòng chịu phí vận chuyển (nếu trong trường hợp cần chuyển hàng cần đổi về kho VStore)</p>

                        </div>
        </div>
		<div  >
                        <a name="dosize"><h4 class="text-center"></a>
                            CÁCH ĐO SIZE GIÀY
                        </h4>                                             
                        <div class="article_detail">
                            <p><img src="https://file.hstatic.net/1000209190/file/step1-huong-dan-chon-size-giay-vascara_grande.jpg"></p>

							<p>01. Vẽ khung bàn chân&nbsp;<br>
							Đặt bàn chân lên tờ giấy trắng, dùng bút đánh dấu theo khung bàn chân trên giấy</p>

							<p><img src="https://file.hstatic.net/1000209190/file/step2-huong-dan-chon-size-giay-vascara_grande.jpg"></p>

							<p>02. Đo chiều dài bàn chân&nbsp;<br>
							Dùng thước đo chiều dài lớn nhất từ mũi chân đến gót chân trên khung bàn chân đã đánh dấu</p>

							<p><img src="https://file.hstatic.net/1000209190/file/step3-huong-dan-chon-size-giay-vascara_grande.jpg"></p>

							<p>03. Đo độ rộng vòng chân&nbsp;<br>
							Lấy thước dây quấn quanh 1 vòng bàn chân từ khớp ngón chân cái đến khớp ngón chân út</p>

							<table class="table" style="width:300px">
								<tbody style="text-align:center;border-width:1;background-color:#e6e6e6">
									<tr>
										<th>SIZE</th>
										<th>ĐỘ DÀI (CM)</th>
									</tr>
									<tr >
										<td>35</td>
										<td>21.5</td>
									</tr>
									<tr>
										<td>36</td>
										<td>23.8</td>
									</tr>
									<tr>
										<td>37</td>
										<td>24.5</td>
									</tr>
									<tr>
										<td>38</td>
										<td>25.2</td>
									</tr>
									<tr>
										<td>30</td>
										<td>24.5</td>
									</tr>
									<tr>
										<td>40</td>
										<td>25</td>
									</tr>
									<tr>
										<td>41</td>
										<td>25.5</td>
									</tr>
									<tr>
										<td>42</td>
										<td>26.5</td>
									</tr>
									<tr>
										<td>43</td>
										<td>27</td>
									</tr>
									<tr>
										<td>44</td>
										<td>28</td>
									</tr>
								</tbody>
							</table>

						</div>
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
							<h5>GIÀY THỂ THAO NAM</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/nam/d1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>DÉP NAM</h5>
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
					<h5 class="card-title">GIÀY - DÉP NAM</h5>
					<p class="card-text">Mang phong cách trẻ trung, năng động. VStrore mang đến nhiều sản phẩm chất lượng, đang dạng phong cách dành cho các bạn nam.</p>
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
							<h5>GIÀY THỂ THAO NỮ</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/nu/c1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>GIÀY CAO GÓT</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/nu/s1.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>SANDAL NỮ</h5>
						  </div>
						</div>
					  </div>
					</div>
				  <div class="card-body">
					<h5 class="card-title">GIÀY - DÉP NỮ</h5>
					<p class="card-text">Phong cách nữ tính, trẻ trung. Những mẫu mã đẹp mắt, cá tính xuất hiện ngày càng nhiều. Hãy đến với VStrore để cùng trải nghiệm nhé!!!.</p>
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
							<h5>BALO TÚI ĐEO CHÉO</h5>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="./anh/balo/bc2.jpg" class="d-block w-100" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							<h5>TÚI ĐEO CHÉO</h5>
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
					<h5 class="card-title">BST BALO ĐỘC ĐÁO</h5>
					<p class="card-text">Đón mùa mới, không gì quan trọng hơn thay đổi phong cách mới để rước thêm thật nhiều may mắn cho chính mình. Bộ sưu tập balo mới nhất của VStrore sẽ giúp bạn!!</p>
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