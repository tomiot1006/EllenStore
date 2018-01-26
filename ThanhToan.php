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
	include( 'modules/header.php' );
	include( 'modules/menutop.php' );
	?>

	<div class="container-fluid">
		<br>
		<div id="main">
			<div class="row">
				<?php
				include( 'modules/menuleft.php' );
				?>
				<div class="col-md-10 col-lg-10" id="center">
					<!--Begin center-->
					<div class="row">
						<div class="col-sm-12 col-xs-12 col-md-8 col-lg-8">
							<h4>Địa chỉ giao hàng của quý khách</h4>
						</div>
						<div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">

							<a href="#"><button class="btn btn-danger"
									style="float: right">
									<i style="margin-right: 3px;" class="fa fa-user"
										aria-hidden="true"></i>Đăng nhập để đặt hàng
								</button></a>
						
						</div>

					</div>
					<hr style="border: 1px solid #676666"/>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="col-md-12 col-lg-12">
								<form method="post">
									<div class="form-group">
										<label for="exampleInputEmail1"><b>Email *</b></label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email please" maxlength="40" required/>
										<small id="emailHelp" class="form-text text-muted">Chúng
											tôi sẽ không bao giờ chia sẻ địa chỉ Mail của bạn với bất kỳ
											ai khác.</small>
									</div>
									<div class="form-group">
										<label><b>Tên của bạn: </b></label> <input type="text" class="form-control" id="" placeholder="Enter your name" maxlength="40" required/>

									</div>
									<div class="form-group">
										<label><b>Số điện thoại của bạn: </b></label> <input type="tel" class="form-control" id="" placeholder="Enter your phone number" required maxlength="13"/> <small class="form-text text-muted">Chúng tôi sẽ liên hệ quý
											khách theo số điện thoại này để xác nhận hoặc thông báo giao
											hàng.</small>
									</div>

									<div class="form-group">
										<label><b>Tỉnh/Thành phố</b></label>
										<select class="form-control" id="exampleSelect1">
											<option>Hồ Chí Minh</option>
											<option>Đà Nẵng</option>
											<option>Hà Nội</option>
											<option>Cần Thơ</option>

										</select>
									</div>
									<div class="form-group">
										<label><b>Quận/Huyện</b></label>
										<select class="form-control" id="exampleSelect1">
											<option>Quận 1</option>
											<option>Quận 2</option>
											<option>Quận 3</option>


										</select>
									</div>
									<div class="form-group">
										<label for="exampleTextarea"><b>Địa chỉ nhận hàng</b></label>
										<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
									</div>


									<button type="submit" class="btn btn-primary">Xác nhận</button>
								</form>
							</div>


							<div class="row"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<br>
	<?php
	include( 'modules/footer.php' );
	?>

	<!-- -->
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

	<!-- script number -->

	<!-- end script number -->
</body>

</html>