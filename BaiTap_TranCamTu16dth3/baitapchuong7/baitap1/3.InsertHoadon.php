<?php
include "1.connection.php";

if (isset($_POST['inserthd'])) {
    $mahd = $_POST['mahd'];
    $makh = $_POST['makh'];
    $mahang = $_POST['mahang'];
    $soluong = $_POST['soluong'];
    $thanhtien = $_POST['thanhtien'];

    if ($mahd && $makh && $mahang && $soluong && $thanhtien) {

        $sql = "insert into hoadon (mahd, makh, mahang, soluong, thanhtien) values ('$mahd', '$makh','$mahang','$soluong','$thanhtien')";

        if (mysqli_query($conn, $sql)) {
            echo "Thêm thành công";
        } else {
            echo "Thêm thất bại";
        }
    } else {
        echo "Vui lòng nhập đầy đủ thông tin";
    }
} 

$sql = "select * from hoadon";

if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1px solid black'>";
        echo "<tr> <th>Mã HD</th> <th>Mã KH</th> <th>Mã hàng</th> <th>SL</th> <th>TT</th> </tr>";

        while ($row = mysqli_fetch_array($result)) {
            
            echo "<tr>";
            echo "<td>" .htmlspecialchars($row['mahd']). "</td>";
            echo "<td>" .htmlspecialchars($row['makh']). "</td>";
            echo "<td>" .htmlspecialchars($row['mahang']). "</td>";
            echo "<td>" .htmlspecialchars($row['soluong']). "</td>";
            echo "<td>" .htmlspecialchars($row['thanhtien']). "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
mysqli_close($conn);
?>

