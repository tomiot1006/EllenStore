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

				<div class="col-md-10 col-lg-10" id="center">
					<!--Begin center-->
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<h4>Giỏ hàng của bạn</h4>
						</div>

					</div>
					<hr style="border: 1px solid #676666"/>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="col-md-12 col-lg-12">
								<table class="table table-bordered table-responsive">
									<thead>
										<tr>
											<th>Hình ảnh</th>
											<th>Sản phẩm</th>
											<th>Đơn giá</th>
											<th>Số lượng</th>
											<th>Thành tiền</th>
											<th>Xóa</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td style="width: 150px;"><input type="number" class="form-control" value="1" style="text-align: center; width: 100%;"/>
											</td>
											<td></td>
											<td></td>

										</tr>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td>Tổng cộng:</td>
											<td></td>
											<td></td>

										</tr>

									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
									<button class="btn btn-primary">Tiếp tục mua hàng</button>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
									<button class="btn btn-success">Thanh toán</button>
								</div>
							</div>
						</div>
					</div>
				</div>
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
				tablinks[ i ].className = tablinks[ i ].className.replace(
					" active", "" );
			}
			document.getElementById( cityName ).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
	<!-- end Tab chi tiet san pham-->
</body>

</html>