<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AmayShop</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<div id="web-up">
		<!-- phan top -->
		<div id="top">
			<div id="top-left">
				<ul>
					<li><a href="#"><img src="images/facebook.png"></a></li>
					<li><a href="#"><img src="images/if_gmail_1220367.png"></a></li>
					<li><a href="#"><img src="images/twitter.png"></a></li>
					<li><a href="#"><img src="images/youtube_2.png"></a></li>
					
				</ul>
			</div>
			<div id="top-right">
				<ul>
					<li><img src="images/login.png"></li>
					<li>|</li>
					<li><a href="#"><h3>Đăng nhập</h3></a></li>
					<li>|</li>
					<li><a href="#"><h3>Đăng ký</h3></a></li>
				</ul>
			</div>
		</div>
		<!-- phan header -->
		<div id="header">
			<div style="float: left;width: 250px;height: 54px;margin: 33px 25px 0 45px;">
				<a href="#"><img src="images/logo2.jpg"></a>
			</div>
			<div style="float: right;width: 400px;height: 80px;">
				<div id="shopcart">
					<img src="images/giohang.png">
				</div>
				<div id="info-cart">
					<p>0 sản phẩm</p>
					<p style="margin-top: 5px;">0 đ</p>
				</div>
			</div>
			<div style="float: right;width: 400px;height: 60px;">
				<div id="header-phone">
					SUPPORT: 01664784997
				</div>
				<div id="search-box">
					<form id="timkiem">
						<input type="text" placeholder="Tìm kiếm tại đây" id="texttim" />
						<button type="submit" id="nuttim"></button>
					</form>
				</div>
			</div>
		</div>
		<!-- phan menu -->
		<div id="menu">
			<ul>
				<img src="images/trangchu.png">
				<li style="border-left: 1px dotted #999999"><a href="#">Trang chủ</a></li>
				<li><a href="#">Thương hiệu</a>
					<ul class="menu-doc">
						<li><a href="#">SHISEIDO</a></li>
						<li><a href="#">LANEIGE</a></li>
						<li><a href="#">BOTANI</a></li>
						<li><a href="#">BIODERMA</a></li>
					</ul>

				</li>
				
				<li><a href="#">Chăm sóc da</a>
					<ul class="menu-doc">
						<li><a href="#">Sữa rửa mặt</a></li>
						<li><a href="#">Sữa tắm</a></li>
						<li><a href="#">Dưỡng ẩm</a></li>
						<li><a href="#">Mặt nạ</a></li>
					</ul>
				</li>
				<li><a href="#">Các bước dưỡng da</a>
					<ul class="menu-doc">
					    <li><a href="#">Tẩy trang</a></li>
						<li><a href="#">Sữa rửa mặt</a></li>
						<li><a href="#">Tẩy tế bào chết da mặt</a></li>
						<li><a href="#">Mặt nạ</a></li>
						<li><a href="#">Nước hoa hồng</a></li>
						<li><a href="#">Sữa dưỡng</a></li>
						<li><a href="#">Xịt khoáng</a></li>
						<li><a href="#">Kem chống nắng</a></li>
					</ul>
				</li>
				<li><a href="#">Hướng dẫn</a>
					<ul class="menu-doc">
						<li><a href="#">Hướng dẫn mua hàng</a></li>
						<li><a href="#">Chính sách giao hàng</a></li>
					</ul>
				</li>
				<li><a href="#">Liên hệ</a></li>
				<li><a href="#">Trợ giúp</a></li>
			</ul>
		</div>	
	</div>
	<!-- kết thúc phần web-up -->
	<div class="clr"></div>
	<div id="web-down">
		<!-- phan slider -->
		<div id="sld">
			<div id="sld-left">
				<section class="slider">
			        <div class="flexslider">
			          <ul class="slides">
			            <li>
			  	    	    <img src="images/sld1.jpg" />
			  	    		</li>
			  	    		<li>
			  	    	    <img src="images/sld3.jpg" />
			  	    		</li>
			  	    		<li>
			  	    	    <img src="images/sld2.jpg" />
			  	    		</li>
			  	    		<li>
			  	    	    <img src="images/sld5.jpg" />
			  	    		</li>
			          </ul>
			        </div>
		      	</section>
			</div>
				<!-- jQuery -->
					  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
					  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

					  <!-- FlexSlider -->
					  <script defer src="jquery.flexslider.js"></script>

					  <script type="text/javascript">
					    $(function(){
					      SyntaxHighlighter.all();
					    });
					    $(window).load(function(){
					      $('.flexslider').flexslider({
					        animation: "slide",
					        start: function(slider){
					          $('body').removeClass('loading');
					        }
					      });
					    });
					  </script>


			<div id="sld-right">
				<div id="qc1">quang cao</div>
				<div id="qc2">quang cao</div>
			</div>
			<div class="clr"></div>
		</div>
		<!-- pham main -->
		<div id="main">
			<div id="main-left">
				<div id="sanpham">
					<ul>
						<li>
							<div class="content">
								<a href="#">
									<img src="images/products/banh1.jpg">
									<h3 class="title">Bánh sinh nhật</h3>
								</a>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
						<li>
							<div class="content">
								<img src="images/products/banh1.jpg">
								<h3 class="title">Bánh sinh nhật</h3>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
						<li>
							<div class="content">
								<img src="images/products/banh1.jpg">
								<h3 class="title">Bánh sinh nhật</h3>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
						<li>
							<div class="content">
								<img src="images/products/banh1.jpg">
								<h3 class="title">Bánh sinh nhật</h3>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
						<li>
							<div class="content">
								<img src="images/products/banh1.jpg">
								<h3 class="title">Bánh sinh nhật</h3>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
						<li>
							<div class="content">
								<img src="images/products/banh1.jpg">
								<h3 class="title">Bánh sinh nhật</h3>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
						<li>
							<div class="content">
								<img src="images/products/banh1.jpg">
								<h3 class="title">Bánh sinh nhật</h3>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
						<li>
							<div class="content">
								<img src="images/products/banh1.jpg">
								<h3 class="title">Bánh sinh nhật</h3>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
						<li>
							<div class="content">
								<img src="images/products/banh1.jpg">
								<h3 class="title">Bánh sinh nhật</h3>
								<h3 class="price">450.000 đ</h3>
							</div>
						</li>
					</ul>
				</div>
			</div>
		<div id="main-right">
			<div id="menu-right">
					<ul>
						<li><a href="#"><h4>Sản phẩm bán chạy</h4></a>
							<ul class="submenu">
								<li><a href="#">Socola</a>
								<li><a href="#">Dâu</a>
								<li><a href="#">Bạc hà</a>
								<li><a href="#">Vani</a>
								<li><a href="#">CaCao</a>
								<li><a href="#">Mix Hoa Quả</a>
							</ul>
						</li>
						<li><a href="#"><h4>Bộ sản phẩm</h4></a>
							<ul class="submenu">
								<li><a href="#">Hoa trang trí</a>
								<li><a href="#">Nến</a>
								<li><a href="#">Mũ</a>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<div class="clr"></div>
		<!-- phan gioi thieu va lien he-->
	<div id="recommen">
		<div id="recommen-left">
			<img src="images/products/banhdemo.jpg">
		<div id="recommen-read">
			<p>
			<h1>AmayShop</h1>
			<hr  width="30%" size="2px" align="center" color="red" style="margin-top: 5px;" /> 
			Chào mừng các bạn ghé thăm shop bánh nhà Amay nha!Shop bánh có rất rất nhiều mẫu bánh sinh yêu dành cho các bạn đây ạ.Đến với Amay bạn không chỉ là chọn bánh mà bạn còn có thể tự thiết kế mẫubánh cho mình đấy ạ. Hãy đến và thỏa sức sáng tạo của mình đi nào !!!
			</p>
		</div>	
		</div>

		<div id="lienhe2">
			<ul>
				<h3 style="margin-top: 100px;">Kênh thông tin liên hệ</h3>
				<hr  width="55%" size="2px" align="center" color="red" style="margin-top: 5px;" /> 
				<li><a href="#"><img src="images/facebook.png"></a></li>
				<li><a href="#"><img src="images/if_gmail_1220367.png"></a></li>
				<li><a href="#"><img src="images/twitter.png"></a></li>
				<li><a href="#"><img src="images/youtube_2.png"></a></li>
			</ul>
		</div>
	</div>
	<div class="clr"></div>
		<!-- phan cuoi -->
<div id="bottom"> 
	<div id="bottom-up">
		<div id="adress">
			<p style="font-size: 16px; color: white; margin-top: 50px;">LIÊN HỆ VỚI CHÚNG TÔI</p>
			<hr  width="85%" size="1px" align="center" color="#cccccc" style="margin-top: 5px;" /> 
			<img src="images/maps.png">
			<p style="color: white;font-size: 16px;">218 Lĩnh Nam, Hoàng Mai, Hà Nội</p>
			<img style="width: 20px; height: 20px; margin-top: 5px; float: left;" src="images/phones.png"> 
			<p style="color: #00cccc; margin-top: 8px;"> : 01664784997</p>
		</div>
		<div id="member">
			<p style="font-size:16px; margin-top: 50px; color: white;">
THÀNH VIÊN:
<br>
<br>
Vũ Thị Hồng Hải<br>
Phạm Nguyễn Phương Linh<br>
Nguyễn Thị Ánh Nguyệt
			</p>
		</div>
		<div id="ttsanpham"></div>
		<div id="ship">
			<img src="images/ship.png">
			<p>Hotline:<p style="color: red; margin:5px 0 0 100px;">19001009</p></p>

		</div>
	</div>
	<div class="clr"></div>
	<div id="bottom-down" style="text-align: center;"><h3>Design by: PhamLinh</h3></div>	
</div>
	</div>
</div>
</body>
</html>