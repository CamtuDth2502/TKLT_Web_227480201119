<?php
include "1.connection.php";

if (isset($_POST['updatekh'])) {
    $makh = $_POST['makh'];
    $tenkh = $_POST['tenkh'];
    $namsinh = $_POST['namsinh'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];

    if ($makh && $tenkh && $namsinh && $dienthoai && $diachi) {

        $check_sql = "SELECT * FROM khachhang WHERE makh = '$makh'";
        $check_result = mysqli_query($conn, $check_sql);
        if (mysqli_num_rows($check_result) > 0) {

            $sql = "update khachhang set tenkh = '$tenkh', namsinh = '$namsinh', dienthoai = '$dienthoai', diachi = '$diachi' where makh = '$makh'";
            
            if (mysqli_query($conn, $sql)) {
                echo "Cập nhật thành công";
            } else {
                echo "Cập nhật thất bại";
            }
        } else {
            echo "Không tìm thấy khách hàng : $makh";
        }
    } else {
        echo "Vui lòng nhập đầy đủ thông tin";
    }
} 

$sql = "select * from khachhang";

if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0 ) {
        echo "<table border='1px solid black'>";

        echo "<tr>";
        echo "<th>Mã KH</th>";
        echo "<th>Tên KH</th>";
        echo "<th>Năm sinh</th>";
        echo "<th>SDT</th>";
        echo "<th>Địa chỉ</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {

            echo "<tr>";
            echo "<td>" .htmlspecialchars($row['makh']). "</td>";
            echo "<td>" .htmlspecialchars($row['tenkh']). "</td>";
            echo "<td>" .htmlspecialchars($row['namsinh']). "</td>";
            echo "<td>" .htmlspecialchars($row['dienthoai']). "</td>";
            echo "<td>" .htmlspecialchars($row['diachi']). "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}
mysqli_close($conn);
?>

