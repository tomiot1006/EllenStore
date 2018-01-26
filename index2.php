<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="Style/Css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<title>Ellen Store</title>
</head>

<body>

	<?php
	#header: log in + log out + image home page
	include( "modules/header.php" );

	#menu nav bar
	include( "modules/menutop.php" );

	?>



	<div class="container-fluid"><br>
		<div id="main">
			<div class="row">
				<?php
				include( "modules/menuleft.php" );

				?>

				<div class="col-md-8 col-lg-8" id="center">
					<div class="row">
						<!--Begin banner-->
						<div class="col-md-12 col-lg-12" id="banner">
							<div id="demo" class="carousel slide" data-ride="carousel">
								<ul class="carousel-indicators">
									<li data-target="#demo" data-slide-to="0" class="active"></li>
									<li data-target="#demo" data-slide-to="1"></li>
									<li data-target="#demo" data-slide-to="2"></li>
								</ul>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="imags/ellen.jpg" alt="Los Angeles" width="1100" height="300">
										<div class="carousel-caption">
											<h3>Los Angeles</h3>
											<p>We had such a great time in LA!</p>
										</div>
									</div>
									<div class="carousel-item">
										<img src="imags/banner4.jpg" alt="Chicago" width="1100" height="300">
										<div class="carousel-caption">
											<h3>Chicago</h3>
											<p>Thank you, Chicago!</p>
										</div>
									</div>
									<div class="carousel-item">
										<img src="imags/about-us.jpg" alt="New York" width="1100" height="300">
										<div class="carousel-caption">
											<h3>New York</h3>
											<p>We love the Big Apple!</p>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#demo" data-slide="prev">
										<span class="carousel-control-prev-icon"></span>
									  </a>
							

								<a class="carousel-control-next" href="#demo" data-slide="next">
										<span class="carousel-control-next-icon"></span>
									  </a>
							

							</div>
						</div>
					</div>
					<!--End banner-->
					<hr>

					<div class="row sanpham">
						<!--Begin san pham moi-->
						<div class="col-md-12 col-lg-12">
							<div id="heading">
								<h2 id="title-head">
										<a href="#">Sản phẩm mới</a>
									</h2>
							



							</div>

							<div class="row">

								<div class="column">
									<div class="card">
										<img src="imags/product1.jpg" alt="Jane" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price"></h6>

											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product5.jpg" alt="Mike" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product2.jpg" alt="John" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="pagination">
										<a href="#">Xem thêm>></a>

									</div>
								</div>
							</div>


						</div>
					</div>
					<!--End san pham moi-->
					<hr>

					<div class="row sanpham">
						<!--Begin san pham khuyen mai-->
						<div class="col-md-12 col-lg-12">
							<div id="heading">

								<h2 id="title-head">
										<a href="#">Sản phẩm khuyến mãi</a>
									</h2>
							



							</div>

							<div class="row">

								<div class="column">
									<div class="card">
										<img src="imags/product1.jpg" alt="Jane" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price"></h6>

											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product5.jpg" alt="Mike" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product2.jpg" alt="John" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="pagination">
										<a href="#">Xem thêm>></a>

									</div>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-md-12 col-lg-12">
									<a href="#"><img class="img-thumbnail" src="imags/khuyenmai.jpg"/></a>
								</div>

							</div>
						</div>

					</div>
					<!--End san pham khuyen mai-->
					<hr>

					<div class="row sanpham">
						<!--Begin san pham noi bat-->
						<div class="col-md-12 col-lg-12">
							<div id="heading">
								<h2 id="title-head">
										<a href="#">Sản phẩm nổi bật</a>
									</h2>
							



							</div>

							<div class="row">
								<div class="column">
									<div class="card">
										<img src="imags/product1.jpg" alt="Jane" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product5.jpg" alt="Mike" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product2.jpg" alt="John" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="pagination">
										<a href="#">Xem thêm>></a>

									</div>
								</div>
							</div>

						</div>

					</div>
					<!--End san pham nổi bật-->
					<hr>

					<div class="row sanpham">
						<!--Begin san pham mua nhieu-->
						<div class="col-md-12 col-lg-12">
							<div id="heading">
								<h2 id="title-head">
										<a href="#">Sản phẩm mua nhiều</a>
									</h2>
							



							</div>

							<div class="row">
								<div class="column">
									<div class="card">
										<img src="imags/product1.jpg" alt="Jane" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product5.jpg" alt="Mike" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="imags/product2.jpg" alt="John" style="width:100%">
										<div class="container">
											<h5 style="text-align: center;"><a href="#" 
										style="color: #252525;text-decoration: none;">Jane Doe</a></h5>
											<h6 id="sale">250.000đ</h6>
											<h6 id="price">250.000đ</h6>
											<p><button class="button" type="submit">Mua</button>
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="pagination">
										<a href="#">Xem thêm>></a>

									</div>
								</div>
							</div>

						</div>

					</div>
					<!--End san pham mua nhieu-->

				</div>
				<div class="col-md-2 col-lg-2"></div>
			</div>
		</div>

	</div>
	<hr>
	<br>
	<?php
	include( "modules/footer.php" );

	?>





</body>

</html>