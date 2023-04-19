<?php
    include_once ("../config/config.php"); 
    $limit = 5; 
    $sqlTotalRecords = "SELECT count(prd_id) as total  FROM product"; 
    $queryTotalRecords = mysqli_query($conn, $sqlTotalRecords);
    $result = mysqli_fetch_assoc($queryTotalRecords);
    $total_records = $result['total']; 
    $total_page = ceil($total_records/$limit); 

    if(isset($_GET['current_page'])){
        $current_page = $_GET['current_page'];
    }else{
        $current_page = 1;
    }
    if($current_page < 1){
        $current_page = 1;
    }
    if($current_page > $total_page){
        $current_page = $total_page;
    }

    // tìm chỉ số start
    $start = ($current_page - 1) * $limit;
    $sqlAllProducts = "SELECT * FROM product P
                    INNER JOIN categories C
                    ON P.cat_id = C.cat_id
                    ORDER BY P.prd_id ASC LIMIT $start, $limit";
    $queryAllProducts = mysqli_query($conn, $sqlAllProducts);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý sản phẩm</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#c21515"  role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>NTH</span>Shop</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg> Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked male-user">
                                        <use xlink:href="#stroked-male-user"></use>
                                    </svg> Hồ sơ</a></li>
                            <li><a href="#"><svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg> Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
			<li class="active1"><a href="admin.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="staff.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Quản lý thành viên</a></li>
			<li><a href="category.php"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý danh mục</a></li>
			<li><a href="product.php" style="background-color:#c21515"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý sản phẩm</a></li>
            <li class=""><a href="bill.php"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg>Quản lý đơn hàng</a></li>
        </ul>

    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Danh sách sản phẩm</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách sản phẩm</h1>
            </div>
        </div>
        <!--/.row-->
        <div id="toolbar" class="btn-group">
            <a href="add_product.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table data-toolbar="#toolbar" class="table" data-toggle="table">
                            <thead>
                                <tr>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                    <th data-field="price" data-sortable="true">Giá</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Trạng thái</th>
                                    <th>Danh mục</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>

                           
                                <?php
                                    if(mysqli_num_rows($queryAllProducts)){
                                        while($product = mysqli_fetch_assoc($queryAllProducts)){  
                                ?>
                                <tr>
                                    <td style=""><?php echo $product['prd_id']; ?></td>
                                    <td style=""><?php echo $product['prd_name']; ?></td>
                                    <td style=""><?php echo $product['prd_price']; ?></td>
                                    <td style="text-align: center" id="product-img"><img width="90" height="120"
                                            src="images/product/<?php echo $product['prd_image']; ?>" /></td>
                                    <td>
                                        <?php

                                            if($product['prd_status'] == 1){
                                                echo ' <span class="label label-success">Còn hàng</span>';
                                            } else {
                                               echo '<span class="label label-success">Hết hàng</span>';
                                            }

                                        ?>
                                    </td>
                                    <td><?php echo $product['cat_name']; ?></td>
                                    <td class="form-group">
                                        <a href="edit_product.php?prd_id=<?php echo $product['prd_id'];?>" class="btn btn-warning"><i
                                                class="glyphicon glyphicon-pencil"></i></a>
                                        <a onclick ="return confirmDelete();" href="del_product.php?prd_id=<?php echo $product['prd_id']; ?>" class="btn btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>

                                <?php
                                    }
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <?php
                                    if($current_page > 1 && $total_page > 1){
                                        $prev = $current_page - 1;
                                        echo '<li class="page-item"><a class="page-link" href="product.php?current_page=" '.$prev.'>&raquo;</a></li>';
                                    }
                                ?>
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <?php
                                    for($i = 1; $i <$total_page; $i++){
                                        if($i == $current_page){
                                            echo '<li class="page-item active"><a class="page-link disabled"> '.$i.' </a></li>';
                                        }else{
                                            echo '<li class="page-item"><a class="page-link" href="product.php?current_page='.$i.'"> '.$i.' </a></li>';
                                        }
                                    }
                                ?>

                                <?php
                                if($current_page < $total_page && $total_page > 1){
                                    $next = $current_page + 1;
                                    echo '<li class="page-item"><a class="page-link" href="product.php?current_page=" '.$next.'>&raquo;</a></li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.main-->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>
    <script>
        function confirmDelete(){
            return confirm ("Bạn có chắc chắn muốn xóa không?");
        }
    </script>
</body>

</html>