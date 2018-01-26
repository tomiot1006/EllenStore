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
	<title>Tất cả sản phẩm</title>
</head>

<body>

	<?php
	include( 'modules/header.php' );
	include( 'modules/menutop.php' );
	?>


	<div class="container-fluid"><br>
		<div id="main">
			<div class="row">
				<?php
				include( 'modules/menuleft.php' );
				?>

				<div class="col-md-8 col-lg-8" id="center">
					<div class="row">
						<!--Begin banner-->
						<div class="col-md-12 col-lg-12" id="search-box">
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<h4>Tìm kiếm nâng cao</h4>
								</div>
							</div>
							<div class="row">
								<!--Begin danh mục-->
								<div class="col-md-3 col-lg-3">
									<div class="form-group">
										<label class="font-weight-bold">Danh mục</label>
										<select class="form-control">
											<option>Áo</option>
											<option>Quần</option>
										</select>
									</div>
								</div>
								<!--End danh muc-->
								<div class="col-md-3 col-lg-3">
									<!--Begin Gia-->
									<div class="form-group">
										<label class="font-weight-bold">Giá</label>
										<select class="form-control">
											<option>Dưới 400k</option>
											<option>400k-600k</option>
											<option>600k-1tr</option>
											<option>Trên 1tr</option>
										</select>
									</div>
								</div>
								<!--End gia-->
								<div class="col-md-3 col-lg-3">
									<!--Begin Sap xep-->
									<div class="form-group">
										<label class="font-weight-bold">Sắp xếp</label>
										<select class="form-control">
											<option>Mới nhất</option>
											<option>Giảm giá</option>
											<option>Mua nhiều</option>
											<option>Nổi bật</option>
										</select>
									</div>
								</div>
								<!--End sapxep-->

							</div>



						</div>
					</div>
					<!--End banner-->


					<div class="row sanpham">
						<!--Begin san pham moi-->
						<div class="col-md-12 col-lg-12">
							<div id="heading">
								<h2 id="title-head">
										<a href="#">Sản phẩm</a>
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
							<hr>
							<!--<div class="row">
								  	<div class="col-md-12 col-lg-12">
								  		<div class="pagination">
										  <a href="#">Xem thêm>></a>
										  
									</div>
								  	</div>
								  </div>-->
							<ul class="pagination">
								<li class="page-item disabled"><a class="page-link" href="#">Previous</a>
								</li>
								<li class="page-item" style="margin-left: 10px;"><a class="page-link" href="#">Next</a>
								</li>
							</ul>

						</div>
					</div>
					<!--End san pham moi-->

				</div>
				<div class="col-md-2 col-lg-2"></div>
			</div>
		</div>

	</div>
	<hr>
	<br>
	<?php
	include( 'modules/footer.php' );
	?>
</body>

</html>