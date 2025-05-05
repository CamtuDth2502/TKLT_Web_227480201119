<?php
    include 'conn.php';
    $sql = "UPDATE hanghoa SET tenhang = 'Acer đáng iu' WHERE mahang = 'AC01'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "cập nhật thành công";
    } 
    else 
    {
        echo " Cập nhật thất bại " ;
    }
?>