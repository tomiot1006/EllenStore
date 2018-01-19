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
<title>Ellen Store</title>
</head>
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
            <li class="nav-item ">
			  <a class="nav-link " href="#" >Thời Trang<i style="margin-left: 2px;" class="fa fa-angle-down" aria-hidden="true"></i></a>
			  	<ul class=" sub-menu-top">
			  		<li ><a  href="#" >Áo</a></li>
			  		<li ><a  href="#" >Quần</a></li>
			  		<li ><a  href="#" >Set</a></li>
			  		<li ><a  href="#" >Thời trang dạo phố</a></li>
			  		<li ><a  href="#" >Thời trang mùa hè</a></li>
			  	</ul>
			</li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
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
							
								<button class="dropbtn">
									DANH MỤC SẢN PHẨM</button>
								<ul>
									<li><a href="#">Áo</a></li>
									<li><a href="#">Quần</a></li>
									<li><a href="#">Váy</a></li>
									<li><a href="#">Set</a></li>
									<li><a href="#">
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
										
									</li>
								</ul>
				
							</div>
						</div>
					</div><!--end menu left-->
					<div class="col-md-8 col-lg-8" id="center">
						<div class="row"><!--Begin banner-->
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
						</div><!--End banner-->
						<hr>
						
						<div class="row sanpham" ><!--Begin san pham moi-->
							<div class="col-md-12 col-lg-12">
								<div  id="heading">
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
											
										<p><button class="button" type="submit">Mua</button></p>
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
										<p><button class="button" type="submit">Mua</button></p>
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
										<p><button class="button" type="submit">Mua</button></p>
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
						</div><!--End san pham moi-->
						<hr>
						
						<div class="row sanpham" ><!--Begin san pham khuyen mai-->
							<div class="col-md-12 col-lg-12">
								<div  id="heading">
								
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
											
										<p><button class="button" type="submit">Mua</button></p>
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
										<p><button class="button" type="submit">Mua</button></p>
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
										<p><button class="button" type="submit">Mua</button></p>
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
							
						</div><!--End san pham khuyen mai-->
						<hr>
						
						<div class="row sanpham"><!--Begin san pham noi bat-->
							<div class="col-md-12 col-lg-12">
								<div  id="heading">
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
										<p><button class="button" type="submit">Mua</button></p>
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
										<p><button class="button" type="submit">Mua</button></p>
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
										<p><button class="button" type="submit">Mua</button></p>
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
							
						</div><!--End san pham nổi bật-->
						<hr>
						
						<div class="row sanpham"><!--Begin san pham mua nhieu-->
							<div class="col-md-12 col-lg-12">
								<div  id="heading">
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
										<p><button class="button" type="submit">Mua</button></p>
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
										<p><button class="button" type="submit">Mua</button></p>
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
										<p><button class="button" type="submit">Mua</button></p>
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
							
						</div><!--End san pham mua nhieu-->
						
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