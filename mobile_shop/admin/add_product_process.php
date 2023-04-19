<?php
    if(isset ($_POST['sbm'])){
        $prd_id = $_POST ['prd_id'];
        $prd_name = $_POST ['prd_name'];
        $prd_price = $_POST ['prd_price'];
        $prd_new = $_POST ['prd_new'];
        $prd_status = $_POST ['prd_status'];
        $cat_id = $_POST['cat_id'];
        if(isset ($_POST ['prd_featured'])){
            $prd_featured = $_POST ['prd_featured'];
        }else {
            $prd_featured = 0;
        }
        $prd_image = $_FILES ['prd_image']['name'];
        $prd_tmp_image = $_FILES ['prd_image'] ['tmp_name'];
        $sqlInsertProduct = "INSERT INTO product(prd_id,prd_name,prd_image, 
        prd_price,prd_status,prd_featured)
        VALUES($cat_id, '$prd_name', '$prd_price', '$prd_new', '$prd_status', '$prd_image', '$prd_featured')";
        include_once ("../config/config.php"); // kết nối tới csdl
        mysqli_query($conn, $sqlInsertProduct);
        // upload file ảnh
        move_uploaded_file($prd_tmp_image, "images/product/" .$prd_image);
        // chuyển về trang product.php
        header("Loaction: product.php");
    }
?>