<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.header {
	background-color: #f1f1f1;
}

.cangiua {
	display: block;
	margin-left: 0;
}

.carousel-inner {
	width: 100%;
	height: 100%;
}

.clear { /*tách biệt content với footer tránh tình trạng dính liền*/
	clear: both;
}

/*Vertical Menu left*/

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
   text-decoration:none;
}

.vertical-menu a:hover {
    background-color: #ccc;
    text-decoration: underline;
    font-style: italic;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
/**/
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="Style/Css.css"/>  
<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>




<title>Ellen Store</title>
</head>
<body>
	<div>
		<div class="header row">
			<br />
			<div
				style="background-color: rgb(194, 10, 56); color: rgb(255, 255, 255); width: 100%; height: 300px;">
				<h1 style="top: 40px;">
					<strong>Thời trang Ellen</strong>
				</h1>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
	<a class="navbar-brand" href="#"> <img src="imags/homeEllen.jpg"
		alt="Logo" style="width: 60px; height: 30px;"></img></a>

	<ul class="navbar-nav">
		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
			href="#" id="navbardrop" data-toggle="dropdown"> Thời Trang </a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Thời trang dạo phố</a> <a
					class="dropdown-item" href="#">Thời trang dạ tiệc</a> <a
					class="dropdown-item" href="#">Áo</a> <a class="dropdown-item"
					href="#">Quần</a> <a class="dropdown-item" href="#">Váy</a> <a
					class="dropdown-item" href="#">Set</a>
			</div></li>
		<li class="nav-item"><a class="nav-link" href="#">Mặc đẹp</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Event</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>

	</ul>
	<form id="search">
		<div class="input-group" style="float: right; left: 620px;">
			<input type="text" class="form-control" placeholder="Search"
				style="width: 269px; top: 1px; right: 30px;" />
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit" title="Search"
					style="right: 28px; height: 42px; top: 1px;">
					<i style="font-size:24px;" class="fa fa-search"></i>
				</button>
			</div>
		</div>
	</form>
	</nav>
	
	<div class="clear">
	</div>
	<div class="col-md-12 col-lg-12">
	<br></br>
	</div>
	
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-2 col-lg-2">
			<!-- menu danh muc quan tri -->
				<div class="row">
					<div class="col-md-12 col-lg-12 vertical-menu">
						<h3>QUẢN TRỊ</h3>		
							<b><a href="#">Tài khoản</a>
							<a href="#">Bài viết</a>
							<a href="#">Sự kiện</a>
							<a href="#">Category</a>
							<a href="#">Product</a>
							<a href="#">Thống kê thu nhập</a>	
							<a href="#">Hóa đơn</a>
							<a href="#">Chi tiết hóa đơn</a>	</b>		
					</div>
				</div>

			</div>
			<div class="col-xs-12 col-md-8 col-lg-8">
			<!-- header table và ô search Cell -->
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-4 col-lg-4">
						<h3>Quản trị sự kiện</h3>
					</div>
					
					<div class="col-md-2 col-lg-2">
					<!-- chẳng có gì trong đây cả -->
					</div>
					
					<div class="col-md-6 col-lg-6 input-group-btn">
						<input type="text" class="form-control"></input>
						<button class="btn btn-default"><i style="font-size:24px;" class="fa fa-search"></i></button>					
					</div>				
				</div>
			<!-- Kết thúc header table và ô search Cell -->
			<div class="clear">
			</div>
				<div class="col-md-12 col-lg-12">
			
					<!-- ---------------------------------Bảng quản trị------------------------- -->
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Mã hóa đơn</th>
								<th>Mã KH</th>		
								<th>Tên KH</th>
								<th>SDT</th>
								<th>Ngày đặt</th>
								<th>Ngày giao</th>
								<th>Giảm giá</th>
								<th><i style="font-size:24px;" class="fa fa-cogs"></i>Edit</th>
								<th><i style="font-size:24px;" class="fa fa-trash"></i>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td><a href="#"><i style="font-size:24px" class="fa">&#xf013;</i></a></td>
								<td><a href="#"><i style="font-size:24px;color:red" class="fa">&#xf00d;</i></a></td>
							</tr>
							<tr>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td><a href="#"><i style="font-size:24px" class="fa">&#xf013;</i></a></td>
								<td><a href="#"><i style="font-size:24px;color:red" class="fa">&#xf00d;</i></a></td>
							</tr>
							
						</tbody>
					</table>
					<!--Kết thúc Bảng quản trị -->
				</div>

				<div class="clear"></div>
			
			</div>
			

		</div>
	</div>
	
	<div class="clear"></div>
	<div class="col-md-12 col-lg-12">
		<br></br>
	</div>
	<div>
		<footer class="clearfix footer" id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4 widget-item" id="about">
					<a href="#">Logo</a>
					<ul>
						<li><a href="https://goo.gl/maps/qJJSu9WHXN92" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"
							style="font-size: 20px; text-indent: 4px;"></i> Điền địa chỉ vô đây</a></li>
						<li><i class="fa fa-phone" aria-hidden="true"
							style="font-size: 20px; text-indent: 3px;"></i> SDT nữa</li>
						<li><i class="fa fa-envelope" aria-hidden="true"
							style="font-size: 20px;"></i> Gmail thì ở đây</li>
						<li><a href="https://www.facebook.com/uyenellen" target="_blank"><i class="fa fa-facebook" aria-hidden="true"
							style="font-size: 20px;"></i> Facebook thì ở đây</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-lg-2 widget-item">
					<h4 class="widget-title">Tài khoản</h4>
					<ul class="widget-menu">
						<li><a href="#">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a></li>
						<li><a href="#">Tin tức</a></li>
						<li><a href="#">Liên hệ</a></li>
					</ul>

				</div>

				<div class="col-md-2 col-lg-2 widget-item">
					<h4 class="widget-title">Chính sách</h4>
					<ul class="widget-menu">
						<li><a href="#">Chính sách mua hàng</a></li>
						<li><a href="#">Chính sách đãi ngộ</a></li>
						<li><a href="#">Đăng kí thành viên</a></li>
						<li><a href="#">Chính sách đổi trả</a></li>
					</ul>

				</div>

				<div class="col-md-2 col-lg-2 widget-item">
					<h4 class="widget-title">Điều khoản</h4>
					<ul class="widget-menu">
						<li><a href="#">Đăng kí tài khoản</a></li>
						<li><a href="#">Chính sách bảo hành</a></li>
						<li><a href="#">Chính sách đổi trả</a></li>
						<li><a href="#">Thông tin cá nhân</a></li>
					</ul>

				</div>
				<div class="col-md-2 col-lg-2 widget-item">
					<h4 class="widget-title">Hướng dẫn</h4>
					<ul class="widget-menu">
						<li><a href="#">Hướng dẫn mua hàng</a></li>
						<li><a href="#">Hướng dẫn thanh toán</a></li>
						<li><a href="#">Điều khoản dịch vụ</a></li>
						<li><a href="#">Thông tin cá nhân</a></li>
					</ul>

				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-6 text-left">
						<span class="info-website"> © Bản quyền thuộc về TT Team </span>
					</div>
				</div>
			</div>
		</div>
		</footer>
	</div>
</body>
</html>