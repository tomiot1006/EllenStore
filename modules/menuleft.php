<?php
	$sql_loaisp ="Select * from danhmuc";
	$query = mysqli_query($conn,$sql_loaisp) or die(mysqli_error());;
?>
<div class="col-md-2 col-lg-2" id="left">
	<!--begin menu left-->
	<div class="row">
		<div class="col-md-12 col-lg-12" id="menuleft">

			<button class="dropbtn">DANH MỤC SẢN PHẨM</button>
			<ul>
				<?php
					while($dong_sp = mysqli_fetch_array($query)){
				?>
				<li><a href="index.php?xem=chitietloaisp&id=<?php echo $dong_sp["iddanhmuc"]?>"><?php echo $dong_sp["tendanhmuc"]?></a>
				</li>
				<?php
				}
				?>
<!--				<li><a href="#">Quần</a>
				</li>
				<li><a href="#">Váy</a>
				</li>
				<li><a href="#">Set</a>
				</li>
				<li><a href="#">Thời trang dạo phố</a>
					<ul class="sub-menu">
						<li><a href="#">Áo1aaaaaa</a>
						</li>
						<li><a href="#">Áo2aaaaaa</a>
						</li>
					</ul>
				</li>
				<li><a href="#">Thời trang dạ tiệc</a>
					<ul class="sub-menu">
						<li><a href="#">Áo1aaaaaa</a>
						</li>
						<li><a href="#">Áo2aaaaaa</a>
						</li>
					</ul>
				</li>-->
			</ul>

		</div>
	</div>
</div>