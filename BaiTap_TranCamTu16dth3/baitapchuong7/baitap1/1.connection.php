<?php
    $servername = "localhost";
    $database = "quanlybanhang"; 
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    echo "Kết nối thành công";
    echo "<br>";
?>