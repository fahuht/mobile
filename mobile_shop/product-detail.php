<?php
    include_once ("config/config.php");
    if(isset($_GET['prd_id'])){
        $prd_id = $_GET['prd_id'];
        $sqlProductDetail = "SELECT * FROM product WHERE prd_id = $prd_id";
        $queryProductDetail = mysqli_query($conn, $sqlProductDetail);
        if(mysqli_num_rows($queryProductDetail) > 0){
            $productDetail = mysqli_fetch_assoc($queryProductDetail);
        }else{
            header ("Location: home.php");
        }
    }else{
        header ("Location: home.php");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/product.css">
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                <?php
                    include_once("common/menu.php");
                ?>
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
                                <img src="images/banner1.webp" alt="Weblearners Training">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner2.png" alt="Weblearners Training">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner3.webp" alt="Weblearners Training">
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
                    <div id="product">
                        <div id="product-head" class="row">
                            <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
                                <img src="images/product/<?php echo $productDetail['prd_image']; ?>">
                            </div>
                            <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
                                <h1><?php echo $productDetail['prd_name']; ?></h1>
                                <ul>
                                    
                                    <li><span>Tình trạng:</span> Máy Mới 100%</li>
                                    <li>Bảo hành 24 tháng (12 tháng chính hãng + 12 tháng bảo hành mở rộng)</li>
                                    <li>Giảm thêm 5% khi mua cùng bất kỳ sản phẩm có giá cao hơn</li>
                                    <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                                    <li id="price-number"><?php echo number_format($productDetail['prd_price'],0,'.',',') ?></li>
                                    <li id="status">
                                        <?php 
                                            if($productDetail['prd_status'] == 1){
                                                echo "Còn hàng";
                                            }else{
                                                echo "Hết hàng";
                                            }
                                        ?>
                                    </li>
                                </ul>
                                <div id="add-cart"><a href="#">Mua ngay</a></div>
                            </div>
                        </div>

                        <!--	Comment	-->
                        <div id="comment" class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3>Bình luận sản phẩm</h3>
                                <form method="post">
                                    <div class="form-group">
                                        <label>Tên:</label>
                                        <input name="comm_name" required type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input name="comm_mail" required type="email" class="form-control" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung:</label>
                                        <textarea name="comm_details" required rows="8" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" name="sbm" class="btn btn-primary">Gửi</button>
                                </form>
                            </div>
                        </div>
                        <!--	End Comment	-->

                        <!--	Comments List	-->
                        <div id="comments-list" class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="comment-item">
                                    <ul>
                                        <li><b>Nguyễn Thu Hương</b></li>
                                        <li>2019-01-03 20:50:10</li>
                                        <li>
                                            <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp
                                                ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán
                                                khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-item">
                                    <ul>
                                        <li><b>Lê Mạnh Hùng</b></li>
                                        <li>2020-06-08 15:30:10</li>
                                        <li>
                                            <p>Sản phẩm có kiểu dáng rất đẹp, mình mua online thì giao hàng rất nhanh nha,
                                                đóng gói cẩn thận nữa.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-item">
                                    <ul>
                                        <li><b>Đoàn Minh Quân</b></li>
                                        <li>2018-01-03 14:35:08</li>
                                        <li>
                                            <p>Hàng chất lượng lắm nha mọi người</p>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <!--	End Comments List	-->
                    </div>
                    <!--	End Product	-->
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