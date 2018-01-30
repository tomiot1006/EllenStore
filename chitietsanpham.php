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
	include( "modules/config.php" );
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
				<?php

				$sql_chitiet_sp = "select * from sanpham where idsp='$_GET[id]'";
				$query1 = $conn->query( $sql_chitiet_sp );
				$chitiet_sp = $query1->fetch_assoc();
				?>
				<div class="col-sm-8 col-md-8 col-lg-8" id="center">
					<!--Begin center-->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<h4>
								<?php echo $chitiet_sp['tensanpham']?>
							</h4>
						</div>

					</div>
					<hr style="border: 1px solid #676666">
					<div class="row">
						<div class="col-sm-5 col-md-5 col-lg-5">
							<!--Begin Hinh mau-->


							<div class="card">
								<img src="uploads/<?php echo $chitiet_sp['hinhanh']?>" style="width: 100%; height: 100%;">
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
												<iframe width="100%" height="450" src="<?php echo $chitiet_sp['video']?>" allowfullscreen> </iframe>
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
									<h4>
										<?php echo $chitiet_sp['tensanpham']?>
									</h4>
									<?php
									if ( is_null( $chitiet_sp[ 'giamgia' ] ) ) {
										echo "<span class='sale'>" . $chitiet_sp[ 'giasp' ] . ".000đ</span> <span class='price'></span><br>";
									} else {
										echo "<span class='sale'>" . round( $chitiet_sp[ 'giasp' ] * ( $chitiet_sp[ 'giamgia' ] / 100 ) ) . ".000đ</span> <span class='price''>" . $chitiet_sp[ 'giasp' ] . ".000đ</span><br>";
									}

									?>



									<hr>
								</div>
							</div>
							<?php
							/*			$sql_Size = "SELECT * FROM sanpham ORDER BY RAND() LIMIT 3";
										$query = mysqli_query( $conn, $sql_sp_noibat )or die( mysqli_error() );*/
							?>
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

						<button class="tablinks" onclick="openCity(event, 'Tokyo')">Đánh
										giá chi tiết</button>
					</div>

					<div id="London" class="tabcontent">

						<p>
							<?php /*echo $chitiet_sp['thongtin_sp']*/?>
						</p>
					</div>


					<div id="Tokyo" class="tabcontent">

						<p>
							<?php /*echo $chitiet_sp['danhgia']*/?>
						</p>
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
								<?php
								$sql_sp_lienquan = "SELECT * FROM sanpham WHERE iddanhmuc =" . $chitiet_sp[ 'iddanhmuc' ] . " and idsp <> " . $chitiet_sp[ 'idsp' ] . " ORDER BY RAND() LIMIT 3";
								$query2 = $conn->query( $sql_sp_lienquan );

								?>
								<?php 
									if ($query2->num_rows > 0) {
    
											while($dong_sanpham = $query2->fetch_assoc()) {
								?>

								<div class="column">
									<div class="card">
										<a href="chitietsanpham.php?id=<?php echo $dong_sanpham[ 'idsp' ]?>">
											<img  src="uploads/<?php echo $dong_sanpham['hinhanh'] ?>"  style="width:100%;"></img>
										</a>
										<div class="container">
											<h6 style="text-align: center;margin-top: 5px;">
											<a href="chitietsanpham.php?id=<?php echo $dong_sanpham[ 'idsp' ]?>" 
										style="color: #252525;text-decoration: none;"><?php echo $dong_sanpham["tensanpham"]?></a></h6>
										
											<?php
											if ( is_null( $dong_sanpham[ 'giamgia' ] ) ) {
												echo "<h6 id='price'></h6>";
												echo "<h6 id='sale'>" . $dong_sanpham[ 'giasp' ] . ".000đ</h6>";

											} else {
												echo "<h6 id='price'>" . $dong_sanpham[ 'giasp' ] . ".000đ</h6>";
												echo "<h6 id='sale'>" . round( $dong_sanpham[ 'giasp' ] * ( $dong_sanpham[ 'giamgia' ] / 100 ) ) . ".000đ</h6>";

											}
											?>
											<p>
												<a href="chitietsanpham.php?id=<?php echo $dong_sanpham[ 'idsp' ]?>"><button class="button" type="submit">Mua</button></a>
											</p>
										</div>
									</div>
								</div>
								<?php
								}
							?>
								


								
							</div>
							<?php
								echo '<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="pagination">
										<a href="#">Xem thêm>></a>

									</div>
								</div>
							</div>'		;
									}
								else{
									echo '<div class="contain">
										<div class="col-sm-12 col-md-12 col-lg-12">
										<p>Không có sản phẩm liên quan</p>
										</div>
									</div>';
								}
						?>
							


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