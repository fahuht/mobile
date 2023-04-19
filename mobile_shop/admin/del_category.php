<?php 
    include_once ("../config/config.php");
    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];
        $sqlCheck = "SELECT * FROM categories WHERE cat_id = $cat_id";
        $queryCheck = mysqli_query($conn, $sqlCheck);
        if(mysqli_num_rows($queryCheck) > 0){
            // xóa
            $sqlDel = "DELETE FROM categories WHERE cat_id = $cat_id" ;
            mysqli_query($conn, $sqlDel);
            header ("Location: category.php");
        }else{
            header ("Location: category.php");
        }
    }
    
?>



