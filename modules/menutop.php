<?php
$sql_loaisp = "Select * from danhmuc";
$query = mysqli_query( $conn, $sql_loaisp )or die( mysqli_error() );;
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" id="menutop"> <a class="navbar-brand" href="#">Ellen</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>


	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Thời Trang </a>
				<div class="dropdown-menu">
					<?php
					while ($dong_sp = mysqli_fetch_array( $query ) ) {
						?>
					<a class="dropdown-item" href="#">
						<?php echo $dong_sp['tendanhmuc']?>
					</a>
					<?php
					}
					?>
				</div>
			</li>
			<li class="nav-item"><a class="nav-link" href="#">Mặc đẹp</a>
			</li>
			<li class="nav-item"><a class="nav-link" href="#">Sự kiện</a>
			</li>
			<li class="nav-item"><a class="nav-link" href="#">Liên hệ</a>
			</li>

			<li class="nav-item">
				<div>
					<form class="form-inline">
						<div class="input-group">

							<input type="text" class="form-control" placeholder="Search..."/>
							<button class="input-group-addon" type="submit">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						

						</div>
					</form>
				</div>
			</li>

		</ul>


	</div>


</nav>