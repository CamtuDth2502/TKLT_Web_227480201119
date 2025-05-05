<?php
    include 'conn.php';
    $sql = "DELETE FROM hanghoa WHERE mahang = 'AC02'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Xóa thành công";
    } 
    else 
    {
        echo "Xóa thất bại" ;
    }
?>
