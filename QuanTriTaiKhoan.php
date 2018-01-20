<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

.clear { /*tách biệt content với footer tránh tình trạng dính liền*/
	clear: both;
}


}
/**/
</style>
<body>

	
	<div >
		<div class="header">
			
			<ul>
			  <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
			  <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
			<h1 style="text-align: center;"><strong>Thời Trang</strong></h1>
			<img src="imags/ellen.jpg" style="height: 400px; width: 100%;"/>
   			
    	</div>
	</div>
        <!-- begin Menu top-->
         <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" id="menutop">
          <a class="navbar-brand" href="#">Ellen</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   			 <span class="navbar-toggler-icon"></span>
         </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Thời Trang
			  </a>
			  <div class="dropdown-menu">
				<a class="dropdown-item" href="#">Áo</a>
				<a class="dropdown-item" href="#">Quần</a>
				<a class="dropdown-item" href="#">Váy</a>
				<a class="dropdown-item" href="#">Set</a>
				<a class="dropdown-item" href="#">Thời trang dạo phố</a>
				<a class="dropdown-item" href="#">Thời trang dạ tiệc</a>
			  </div>
			</li>
			  <li class="nav-item">
              <a class="nav-link" href="#">Mặc đẹp</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Sự kiện</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
            <li class="nav-item">
               <div >
				 <form class="form-inline">
					 <div class="input-group">
					  
					  <input type="text" class="form-control" placeholder="Search...">
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
        <!-- end menutop-->
        
        
        <div class="container-fluid"><br>
			<div id="main">
				<div class="row">
					<div class="col-md-2 col-lg-2" id="left"><!--begin menu left-->
						<div class="row">
							<div class="col-md-12 col-lg-12" id="menuleft">
							
								<button class="dropbtn">QUẢN TRỊ</button>
								<ul>
									<li><a href="#">Tài khoản</a></li>
									<li><a href="#">Bài viết</a></li>
									<li><a href="#">Category</a></li>
									<li><a href="#">Product</a></li>
									<li><a href="#">Thống kê thu nhập</a></li>
									<li><a href="#">Hóa đơn</a></li>
									<li><a href="#">Chi tiết hóa đơn</a></li>
									<!--<li><a href="#">
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										Thời trang dạo phố</a>
										
										<ul class="sub-menu">
											<li><a href="#">Áo1aaaaaa</a></li>
											<li><a href="#">Áo2aaaaaa</a></li>
										</ul>
										
									</li>
									<li><a href="#">
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										Thời trang dạ tiệc</a>
										
										<ul class="sub-menu">
											<li><a href="#">Áo1aaaaaa</a></li>
											<li><a href="#">Áo2aaaaaa</a></li>
										</ul>
										
									</li>-->
								</ul>
				
							</div>
						</div>
					</div><!--end menu left-->
					<div class="col-md-8 col-lg-8" id="center">
						
						<div class="col-xs-12 col-md-12 col-lg-12">

						<!-- header table và ô search Cell -->
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-4 col-lg-4">
						<h3>Quản trị</h3>
					</div>

					<div class="col-md-2 col-lg-2">
						<!-- chẳng có gì trong đây cả -->
					</div>

					<div class="col-md-6 col-lg-6 input-group-btn">
						<input type="text" class="form-control"></input>
						<button class="btn btn-default">
							<i style="font-size: 24px;" class="fa fa-search"></i>
						</button>
					</div>
				</div>
				<!-- Kết thúc header table và ô search Cell -->
				<div class="clear"></div>
				<div class="col-md-12 col-lg-12">

					<!-- ---------------------------------Bảng quản trị------------------------- -->
					<table class="table table-responsive">
						<thead>
							<tr>
								<th><i style="font-size: 24px;" class="fa fa-user-circle-o"></i>Name</th>
								<th><i style="font-size: 24px;" class="fa fa-male"></i>Username</th>
								<th><i style="font-size: 24px;" class="fa fa-key"></i>Password</th>
								<th><i style="font-size: 24px;" class="fa fa-phone"></i>Phone</th>
								<th><i style="font-size: 24px;" class="fa fa-calendar"></i>YoB</th>
								<th><i style="font-size: 24px;" class="fa fa-envelope-o"></i>Mail</th>
								<th><i style="font-size: 24px;" class="fa fa-map-marker"></i>Address</th>
								<th><i style="font-size: 24px;" class="fa fa-cogs"></i>Edit</th>
								<th><i style="font-size: 24px;" class="fa fa-trash"></i>Delete</th>
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
								<td><a href="#"><i style="font-size: 24px" class="fa">&#xf013;</i></a></td>
								<td><a href="#"><i style="font-size: 24px; color: red"
										class="fa">&#xf00d;</i></a></td>
							</tr>
							<tr>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td><a href="#"><i style="font-size: 24px" class="fa">&#xf013;</i></a></td>
								<td><a href="#"><i style="font-size: 24px; color: red"
										class="fa">&#xf00d;</i></a></td>
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
    	<footer class="clearfix" id="footer">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-4 col-lg-4 widget-item" id="about">
    					<a href="#">Logo</a>

    					<ul>
    						<li>
    							<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px;text-indent: 4px;"></i>
    							135/13A,Tăng Nhơn Phú B,Tp.Hồ Chí Minh
    						</li>
    						<li>
    							<i class="fa fa-phone" aria-hidden="true" style="font-size: 20px; text-indent: 3px;"></i>
    							01659548682
    						</li>
    						<li>
    							<i class="fa fa-envelope" aria-hidden="true" style="font-size: 20px;"></i>
    							tvtri1997@gmail.com
    						</li>
    					</ul>
    				</div>
    				<div class="col-md-2 col-lg-2 widget-item">
    					<h4 class="widget-title">Tài khoản</h4>
    					<ul class="widget-menu">
    						<li>
    							<a href="#">Trang chủ</a>
    						</li>
    						<li>
    							<a href="#">Sản phẩm</a>
    						</li>
    						<li>
    							<a href="#">Tin tức</a>
    						</li>
    						<li>
    							<a href="#">Liên hệ</a>
    						</li>
    					</ul>
    					
    				</div>
    				
    				<div class="col-md-2 col-lg-2 widget-item">
    					<h4 class="widget-title">Chính sách</h4>
    					<ul class="widget-menu">
    						<li>
    							<a href="#">Chính sách mua hàng</a>
    						</li>
    						<li>
    							<a href="#">Chính sách đãi ngộ</a>
    						</li>
    						<li>
    							<a href="#">Đăng kí thành viên</a>
    						</li>
    						<li>
    							<a href="#">Chính sách đổi trả</a>
    						</li>
    					</ul>
    					
    				</div>
    				
    				 <div class="col-md-2 col-lg-2 widget-item">
    					<h4 class="widget-title">Điều khoản</h4>
    					<ul class="widget-menu">
    						<li>
    							<a href="#">Đăng kí tài khoản</a>
    						</li>
    						<li>
    							<a href="#">Chính sách bảo hành</a>
    						</li>
    						<li>
    							<a href="#">Chính sách đổi trả</a>
    						</li>
    						<li>
    							<a href="#">Thông tin cá nhân</a>
    						</li>
    					</ul>
    					
    				</div>
    				<div class="col-md-2 col-lg-2 widget-item">
    					<h4 class="widget-title">Hướng dẫn</h4>
    					<ul class="widget-menu">
    						<li>
    							<a href="#">Hướng dẫn mua hàng</a>
    						</li>
    						<li>
    							<a href="#">Hướng dẫn thanh toán</a>
    						</li>
    						<li>
    							<a href="#">Điều khoản dịch vụ</a>
    						</li>
    						<li>
    							<a href="#">Thông tin cá nhân</a>
    						</li>
    					</ul>
    					
    				</div>
    			</div>
    		</div>
    		<div class="bottom-footer">
    			<div class="container">
    				<div class="row">
    					<div class="col-xl-12 col-lg-6 text-left">
    						<span class="info-website">
    							© Bản quyền thuộc về TT Team
    						</span>
    					</div>
    				</div>
    			</div>
    		</div>
    	</footer>



 
 
</body>
</html>