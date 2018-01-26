<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="Style/Css.css"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<title>Thông tin sản phẩm</title>
</head>

<body>


	<?php
	#header: log in + log out + image home page
	include( "modules/header.php" );

	#menu nav bar
	include( "modules/menutop.php" );

	?>

	<div class="container-fluid">
		<br>
		<div id="main">
			<div class="row">
				<?php
				include( "modules/menuleft.php" );



				?>

				<div class="col-sm-8 col-md-8 col-lg-8" id="center">
					<!--Begin center-->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<h4>Váy đỏ quyến rủ</h4>
						</div>

					</div>
					<hr style="border: 1px solid #676666">
					<div class="row">
						<div class="col-sm-5 col-md-5 col-lg-5">
							<!--Begin Hinh mau-->


							<div class="card">
								<img src="imags/product2.jpg" alt="Jane" style="width: 100%; height: 100%;">
								<div class="container"></div>
							</div>
							<div id="video">
								<!--Begin video-->
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="width: 100%;">
											<i class="fa fa-youtube-play" aria-hidden="true"></i> View
											more
										</button>
							

								<!-- The Modal -->
								<div class="modal fade" id="myModal">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Video mẫu</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<iframe width="100%" height="450" src="https://www.youtube.com/embed/psuRGfAaju4" allowfullscreen> </iframe>
											</div>

											<!-- Modal footer -->
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--End Video-->


						</div>
						<!--End hình mau-->
						<div class="col-sm-6 col-md-6 col-lg-6">

							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<h4>Váy đỏ quyến rủ</h4>
									<span class="sale">250.000đ</span> <span class="price">250.000đđ</span><br>

									<p style="text-align: justify;">Phong cách thời trang nam giới nói riêng luôn có sự thay đổi theo thời gian. Tuy nhiên, những trang phục thuộc diện thì vẫn có được chỗ đứng cho mình trong lòng công chúng. Món đồ mà chúng tôi đang muốn nói đến ở đây là áo sơmi trắng....</p>
									<hr>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<form>
										<!--So luong san pham-->
										<label>Sô lượng:</label> <input class="form-control" type="number" value="1" max="69" min="0" id="number" name="number" style="text-align: center;"></input>
										<lable>Size:</lable>
										<select class="form-control">
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
											<option>XXL</option>
										</select>
										<lable>Màu:</lable>
										<select class="form-control">
											<option>Đỏ</option>
											<option>Đen</option>

										</select>

										<button class="btn btn-warning" type="submit" style="margin-top: 20px;">
													<i class="fa fa-cart-arrow-down" aria-hidden="true"
														style="font-size: 22px; margin-right: 6px;"></i>Thêm vào
													giỏ hàng
												</button>
									
									</form>
								</div>

							</div>
							<hr>
						</div>


					</div>
					<br>
					<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'London')">Thông
										tin sản phẩm</button>
						<button class="tablinks" onclick="openCity(event, 'Paris')">Hướng
										dẫn mua hàng</button>
						<button class="tablinks" onclick="openCity(event, 'Tokyo')">Đánh
										giá chi tiết</button>
					</div>

					<div id="London" class="tabcontent">

						<p>Thông tin sản phẩm</p>
					</div>

					<div id="Paris" class="tabcontent">

						<p>Hướng dẫn mua hàng</p>
					</div>

					<div id="Tokyo" class="tabcontent">

						<p>Đánh giá chi tiết</p>
					</div>
					<hr>

					<div class="row sanpham">
						<!--Begin san pham lien quan-->
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div id="heading">
								<h2 id="title-head">
													<a href="#">Sản phẩm liên quan</a>
												</h2>
							
							</div>

							<div class="row">

								<div class="column">
									<div class="card">
										<img src="imags/product1.jpg" alt="Jane" style="width: 100%">
										<div class="container">
											<h5 style="text-align: center;">
																	<a href="#"
																		style="color: #252525; text-decoration: none;">Jane
																		Doe</a>
																</h5>
										
											<h6 id="sale">250.000đ</h6>
											<h6 id="price"></h6>

											<p>
												<button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product5.jpg" alt="Mike" style="width: 100%">
										<div class="container">
											<h5 style="text-align: center;">
																	<a href="#"
																		style="color: #252525; text-decoration: none;">Jane
																		Doe</a>
																</h5>
										
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p>
												<button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product2.jpg" alt="John" style="width: 100%">
										<div class="container">
											<h5 style="text-align: center;">
																	<a href="#"
																		style="color: #252525; text-decoration: none;">Jane
																		Doe</a>
																</h5>
										
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p>
												<button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="pagination">
										<a href="#">Xem thêm>></a>

									</div>
								</div>
							</div>

						</div>
					</div>
					<!--End san liên quan-->
				</div>
				<!--End center-->

			</div>
		</div>
	</div>
	<hr>
	<br>
	<?php
	include( "modules/footer.php" );


	?>

	<script>
		/* Bengin Tab chi tiet san pham*/
		function openCity( evt, cityName ) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName( "tabcontent" );
			for ( i = 0; i < tabcontent.length; i++ ) {
				tabcontent[ i ].style.display = "none";
			}
			tablinks = document.getElementsByClassName( "tablinks" );
			for ( i = 0; i < tablinks.length; i++ ) {
				tablinks[ i ].className = tablinks[ i ].className.replace( " active", "" );
			}
			document.getElementById( cityName ).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
	<!-- end Tab chi tiet san pham-->
</body>

</html>