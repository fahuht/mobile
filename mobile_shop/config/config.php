<?php
    $conn = mysqli_connect('localhost', 'root','','new_db');
    if(!$conn){
        die("Kết nối thành công" . mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'UTF8');
?>