<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cart.css">
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
                    <h1><a href="home.php"><img class="img-fluid" src="images/123.png" ></a></h1>
                </div>
                <div id="search" class="col-lg-7 col-md-7 col-sm-12">
                    <form class="form-inline ml-5">
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
                <div class="col-lg-12 col-md-12 col-sm-12">

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
                                <img src="images/banner1.webp" alt="NTH">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner2.png" alt="NTH">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner3.webp" alt="NTH">
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

                    <!--	Cart	-->
                    <div id="my-cart">
                        <div class="row">
                            <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Thông tin sản phẩm</div>
                            <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Tùy chọn</div>
                            <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Giá</div>
                        </div>
                        <form method="post">
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/sp1.png">
                                    <h4>iPhone 14 </h4>
                                </div>

                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>24.990.000đ</b><a href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>
                           
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/sp10.webp">
                                    <h4>iPhone 12 Mini 256Gb</h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>13.990.000</b><a
                                        href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/pk2.webp">
                                    <h4>Ốp lưng MagSafe cho iPhone 14 ProMax</h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>1.320.000</b><a
                                        href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/pk7.jpg">
                                    <h4>Airpods 3</h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>

                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>4.290.000đ</b><a
                                        href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>

                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/pk9.webp">
                                    <h4>Pin dự phòng MagSafe </h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>

                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>2.540.000</b><a
                                        href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>

                            <div class="row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật
                                        giỏ hàng</button>
                                </div>
                                <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>47.130.000đ</b></div>
                            </div>
                        </form>

                    </div>
                    <!--	End Cart	-->

                    <!--	Customer Info	-->
                    <div id="customer">
                        <form method="post">
                            <div class="row">

                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Họ và tên (bắt buộc)" type="text" name="name"
                                        class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone"
                                        class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control"
                                        required>
                                </div>
                                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                    <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text"
                                        name="add" class="form-control" required>
                                </div>

                            </div>
                        </form>
                        <div class="row">
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Mua ngay</b>
                                    <span>Giao hàng tận nơi siêu tốc</span>
                                </a>
                            </div>
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Trả góp Online</b>
                                    <span>Vui lòng call (+84) 03.95.95.4444</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--	End Customer Info	-->

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