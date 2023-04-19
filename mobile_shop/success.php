<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Đặt hàng thành công</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/success.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>

    <!--	Header	-->
    <div id="header">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                    <h1><a href="home.php"><img class="img-fluid" src="images/123.png"></a></h1>
                </div>
                <div id="search" class="col-lg-7 col-md-7col-sm-12">
                    <form class="form-inline">
                        <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <div id="cart" class="col-lg-2 col-md-2 col-sm-12">
                    <a class="mt-4 mr-2" href="cart.php">giỏ hàng
                        <i class="fa-solid fa-cart-shopping cart-icon">
                            <span class="mt-3">5</span></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!--	End Header	-->

    <!--	Body	-->
    <div id="body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <ul class="nav justify-content-center ">
                        <li class="nav-item">
                          <a class="nav-link active ; text-dark " aria-current="page" href="#">Điện thoại</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link ; text-dark"  href="#">Laptop</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link ; text-dark"  href="#">Phụ kiện</a>
                        </li>
                      </ul>
                    <!-- <form class="form-inline">
                        <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                    </form> -->
                </div>
            </div>
            <div class="row">
                <div id="main" class="col-lg-12 col-md-12 col-sm-12">
                    <!--	Slider	-->
                    <div id="slide" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#slide" data-slide-to="0" class="active"></li>
                            <li data-target="#slide" data-slide-to="1"></li>
                            <li data-target="#slide" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/banner1.webp" alt="Webleaners Training">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner2.png" alt="Webleaners Training">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner3.webp" alt="Webleaners Training">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#slide" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#slide" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                    <!--	End Slider	-->

                    <!--	Order Success	-->
                    <div id="order-success">
                        <div class="row order-success-wrap">
                            <img src="images/order-success.png" alt="">
                            <div id="order-success-txt" class="col-lg-9 col-md-9 col-sm-12">
                                <h3>bạn đã đặt hàng thành công !</h3>
                                <p>Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi.</p>
                                <p>Chúng tôi sẽ liên hệ bạn trong vòng <strong>15 phút</strong> và cam kết giao hàng trong vòng <strong>60 phút</strong></p>
                                <p><i class="fa-solid fa-phone-volume"></i> Tư vấn bán hàng <span>1900.4545.43</span> (08:00-22:00)</p>
                            </div>
                        </div>
                    </div>
                    <!--	End Order Success	-->

                </div>
            </div>
        </div>
    </div>
    <!--	End Body	-->



    <div id="footer-top">
	<div class="container">
    	<div class="row">
        	<div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
            	<h2><a href="#"><img id ="logo-end" src="images/logo2.jpg"></a></h2>
                <p>
                	<strong>NTH</strong> Chúng tôi đào tạo chuyên sâu trong 2 lĩnh vực là Lập trình Website & Mobile
                     nhằm cung cấp cho thị trường CNTT Việt Nam những lập trình viên thực sự chất lượng, 
                     có khả năng làm việc độc lập, cũng như Team Work ở mọi môi trường đòi hỏi sự chuyên nghiệp cao. 
                </p>
            </div>
            <div id="address" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Địa chỉ</h3>
                <p>Nguyễn Văn Cừ - Ngọc Lâm - Hà Nội</p>
                <p>Xã Đàn - Đống Đa - Hà Nội</p>
            </div>
            <div id="service" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Dịch vụ</h3>
            	<p>Bảo hành có cam kết trong 12 tháng</p>
            	<p>Hư gì đổi nấy NGAY và LUÔN</p>
            </div>
            <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Hotline</h3>
            	<p>Mua hàng: 1900.6767.43 (7:30 - 22:00)</p>
                <p>CSKH: 1900.4545.43 (8:00 - 21:30)</p>
                <p>Kỹ thuật: 1900.8686.55 (7:30 - 22:00)</p>
            </div>
        </div>
    </div>
</div>
    <!--	Footer	-->
    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>
                        2022 © NTH. All rights reserved. Developed by NTH.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--	End Footer	-->

</body>

</html>