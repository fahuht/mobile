<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/search.css">
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
                <div id="search" class="col-lg-7 col-md-7 col-sm-12">
                    <form class="form-inline ml-5">
                        <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <div id="cart" class="col-lg-2 col-md-2 col-sm-12">
                    <a class="mt-4 mr-2" href="cart.php">giỏ hàng
                        <i class="fa-solid fa-cart-shopping cart-icon">
                            <span class="mt-3">8</span></i>
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

                    <!--	List Product	-->

                    <div class="products">
                    <div id="search-result">Kết quả tìm kiếm với sản phẩm <span>iPhone </span>
                        </div>
                        <div class="product-list row">
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="dienthoai/ip14 128gb.webp"></a>
                                    <h4><a href="#">iPhone 14 128GB</a></h4>
                                    <p>Giá Bán: <span>21.990.000đ</span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="dienthoai/ip14 256gb.webp"></a>
                                    <h4><a href="#">iPhone 14 256GB</a></h4>
                                    <p>Giá Bán: <span>23.690.000đ</span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="dienthoai/ip14 plus 128gb.webp"></a>
                                    <h4><a href="#">iPhone 14 Plus</a></h4>
                                    <p>Giá Bán: <span>24.990.000đ</span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="anhsp/ip1164gb.webp"></a>
                                    <h4><a href="#">iPhone 11 64Gb</a></h4>
                                    <p>Giá Bán: <span>11.190.000đ</span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="anhsp/ip12 64gb.webp"></a>
                                    <h4><a href="#">iPhone 12 64GB</a></h4>
                                    <p>Giá Bán: <span>12.690.000đ</span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="anhsp/ip12 prmax 128gb.webp"></a>
                                    <h4><a href="#">iPhone 12 Pro Max 128GB</a></h4>
                                    <p>Giá Bán: <span>25.990.000đ</span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="anhsp/ip13 128gb.webp"></a>
                                    <h4><a href="#">iPhone 13 128GB</a></h4>
                                    <p>Giá Bán: <span>18.990.000đ</span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="anhsp/ip14 pro 128gb.webp"></a>
                                    <h4><a href="#">iPhone 14 Pro 128Gb</a></h4>
                                    <p>Giá Bán: <span>30.490.000đ</span></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="#"><img src="dienthoai/ip14 plus 128gb.webp"></a>
                                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                    <p>Giá Bán: <span>24.990.000đ</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--	End List Product	-->

                    <div id="pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
                        </ul>
                    </div>

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