<?php
include "1.connection.php";

if (isset($_POST['deletekh'])) {
    $makh = $_POST['makh'];

    if ($makh) {

        $check_sql = "SELECT * FROM khachhang WHERE makh = '$makh'";
        $check_result = mysqli_query($conn, $check_sql);
        if (mysqli_num_rows($check_result) > 0) {

            $sql = "delete from khachhang where makh = '$makh'";
            
            if (mysqli_query($conn, $sql)) {
                echo "Xóa thành công";
            } else {
                echo "Xóa thất bại";
            }
        } else {
            echo "Không tìm thấy khách hàng có mã: $makh";
        }
    } else {
        echo "Vui lòng nhập mã kh";
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

