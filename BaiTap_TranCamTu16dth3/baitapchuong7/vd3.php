<?php
    include 'conn.php';
    $sql="INSERT INTO hanghoa  VALUES ('AC02', 'Acer cute', 'AC', '2010', '800')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Mẫu tin đã được thêm";
    } 
    else 
    {
        echo " Không thêm được " ;
    }
?>