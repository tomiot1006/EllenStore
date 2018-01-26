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
	<title></title>
</head>
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
	
	.clear {
		/*tách biệt content với footer tránh tình trạng dính liền*/
		clear: both;
	}
}

/**/
</style>

<body>


	<?php
	include( 'modules/header.php' );
	include( 'modules/menutop.php' );
	?>


	<div class="container-fluid"><br>
		<div id="main">
			<div class="row">
				<?php
				include( 'modules/menuleft-quantri.php' );
				?>
				<div class="col-md-8 col-lg-8" id="center">

					<div class="col-xs-12 col-md-12 col-lg-12">

						<!-- header table và ô search Cell -->
						<div class="row" style="margin-top: 20px;">
							<div class="col-md-4 col-lg-4">
								<h3>Chi tiết hóa đơn</h3>
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
										<th>Tên KH</th>
										<th>Mã SP</th>
										<th>Tên SP</th>
										<th>Số lượng SP</th>
										<th>Tổng tiền</th>
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
										<td><a href="#"><i style="font-size:24px" class="fa">&#xf013;</i></a>
										</td>
										<td><a href="#"><i style="font-size:24px;color:red" class="fa">&#xf00d;</i></a>
										</td>
									</tr>
									<tr>
										<td>Cell</td>
										<td>Cell</td>
										<td>Cell</td>

										<td>Cell</td>
										<td>Cell</td>
										<td>Cell</td>
										<td><a href="#"><i style="font-size:24px" class="fa">&#xf013;</i></a>
										</td>
										<td><a href="#"><i style="font-size:24px;color:red" class="fa">&#xf00d;</i></a>
										</td>
									</tr>

								</tbody>
							</table>
							<!--Kết thúc Bảng quản trị -->
						</div>

						<div class="clear"></div>

					</div>
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


	</script>


</body>

</html>