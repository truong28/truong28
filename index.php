<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Tourguide website</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="VNĐ">
							<option>USD</option>
							<option>VNĐ </option>
						</select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +18009476</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="lienhe1.php"><i class="fa fa-user s_color"></i> Liên hệ</a></li>
                            <li><a href="signup.php"><i class="fas fa-location-arrow"></i> Đăng kí</a></li>
                            <li><a href="login.php"><i class="fas fa-headset"></i> Đăng nhập</a></li>
                            <li><a href="adminDN.php"><i class="fas fa-headset"></i> Admin Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" ><img src="images/logo1.jpg" class="logo" alt="" width="50%"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="Gioithieu1.php">Giới thiệu</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Tour du lịch</a>
                            <ul class="dropdown-menu">
								<li><a href="bosuutap1.php">Du lịch miền nam</a></li>
								<li><a href="bosuutap1.php">Du lịch miền bắc</a></li>
                                <li><a href="bosuutap1.php">Du lịch miền trung</a></li>
                               
                               
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Cá Nhân</a></li>
                        <li class="nav-item"><a class="nav-link" href="lienhe1.php">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge"></span>
								<p>Giỏ hàng của tôi</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <a  href="xuattour.php" class="input-group-addon"><i class="fa fa-search"></i></a>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/bn1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                          	 <h1 class="m-b-20"><strong>Welcome To <br> Tourguide Website</strong></h1>
                            <p class="m-b-40">Hãy trải nghiệm khi cuộc đời còn cho phép 
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/bn2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                             <h1 class="m-b-20"><strong>Welcome To <br> Tourguide Wedsite</strong></h1>
                            <p class="m-b-40">Hãy trải nghiệm khi cuộc đời còn cho phép 
                         
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/bn3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Tourguide Website</strong></h1>
                           <p class="m-b-40">Hãy trải nghiệm khi cuộc đời còn cho phép 
                      
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/body1.jpg" alt="" style="height: 300px" />
                        <a class="btn hvr-hover" href="#">Miền Bắc</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/body2.jpg" alt="" style="height: 300px"/>
                        <a class="btn hvr-hover" href="#">Miền Nam</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/body3.jpg" alt=""style="height: 300px" />
                        <a class="btn hvr-hover" href="#">Miền Trung</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>OUR SHOP</h1>
                        <p>Chúng tôi sẽ mang lại sự tự tin, năng động và thoải mái cho bạn.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="" data-filter="*">Các Tour</button>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                           
                            <img src="images/tour1.jpg" class="img-fluid" alt="Phố Cổ Hội An" style="height:200px ">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <a class="cart" href="#">xem chi tiết</a>
                            </div>
                        </div>
                        <div class="why-text">
							<h4> Phố Cổ Hội An</h4>
                            <h4> Thành Phố Đẹp Hàng Đầu Châu Á</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                          
                            <img src="images/tour2.jpg" class="img-fluid" alt="Hồ Chí Minh City"style="height:200px ">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <a class="cart" href="#">xem chi tiết</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4> Thành Phố Hồ Chí Minh</h4>
                            <h4>Thành Phố Lớn Nhất Việt Nam</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                           
                            <img src="images/tour3.jpg" class="img-fluid" alt="Image"style="height:200px ">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>
                                  
                                </ul>
                                <a class="cart" href="#">Xem chi tiết</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Đất Mũi Cà Mau</h4>
                            <h4>Điểm cuối cùng của Việt Nam</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                           
                            <img src="images/tour4.jpg" class="img-fluid" alt="Image"style="height:200px ">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Xem"><i class="fas fa-eye"></i></a></li>                </ul>
                                <a class="cart" href="#">xem chi tiết</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4> Sapa</h4>
                           <h4>Nơi Hội Tụ Trời và Đất</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Bạn muốn trở thành một hướng dẫn viên du lịch địa phương?</h1>
                        <p>Tuyệt vời! Chúng tôi muốn bạn tham gia cộng đồng đang phát triển của chúng tôi và giúp bạn kết nối với khách du lịch và khách truy cập để bạn hiển thị xung quanh và giới thiệu về địa phương của bạn. Bạn được tham gia miễn phí 100% và chúng tôi có thể giúp tiếp thị ban đầu và công khai cho hồ sơ hướng dẫn của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                 
                    
                       
                        <div class="blog-content"  >
                           
                            <button class="option-blog" >
                              <a href="#">Đăng kí làm Hướng Dẫn Viên</a>
                               
                            </button>
                    
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
           <div class="item">
                <div class="ins-inner-box">
                    <img src="images/foot1.jpg" alt="Hang Sơn Đoong-Quảng Bình" style="height: 140px" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/foot2.jpg" alt="Cố Đô Huế-Thừa Thiên Huế"  style="height: 140px"/>
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/foot7.jpg" alt="Phố Cổ Hội An-Hội An"  style="height: 140px" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/foot3.jpg" alt="Vịnh hạ Long-Hạ Long" style="height: 140px"/>
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/foot5.jpg" alt="Hồ Gươm-hà nội"  style="height: 140px"/>
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/foot4.jpg" alt=""  style="height: 140px"/>
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/foot6.jpg" alt="Phong Nha Kẻ Bàng-Động Phong Nha"  style="height: 140px"/>
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Thời gian làm việc</h3>
							<ul class="list-time">
								<li>24/24/7</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Phản hồi</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Gửi</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Mạng Xã Hội</h3>
							<p>Chúng tôi sẽ mang lại sự tự tin, năng động và thoải mái cho bạn</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                               
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Giới thiệu</h4>
                            <p>Đây là nơi các bạn có thể tự do thoải mái du lịch theo cách mình mình muốn</p> 
							 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Thông tin</h4>
                            <ul>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Khách hàng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Liên hệ</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Địa chỉ: 56 Nguyễn Văn Bảo,quận Gò Vấp </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Số điện thoại: <a href="tel:+18009476">+18009476</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:ultimateshopinfo@gmail.com">tourguide@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="#">Tourguide website</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>