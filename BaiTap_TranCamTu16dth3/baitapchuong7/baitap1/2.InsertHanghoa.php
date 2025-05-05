<?php
include "1.connection.php";

if (isset($_POST['insert'])) {
    $mahang = $_POST['mahang'];
    $tenhang = $_POST['tenhang'];
    $mansx = $_POST['mansx'];
    $namsx = $_POST['namsx'];
    $gia = $_POST['gia'];

    if ($mahang && $tenhang && $mansx && $namsx && $gia) {

        $sql = "insert into hanghoa (mahang, tenhang, mansx, namsx, gia) values ('$mahang', '$tenhang','$mansx','$namsx','$gia')";

        if (mysqli_query($conn, $sql)) {
            echo "Thêm thành công";
        } else {
            echo "Thêm thất bại";
        }
    } else {
        echo "Vui lòng nhập đầy đủ thông tin";
    }
} 

$sql = "select * from hanghoa";

if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1px solid black'>";
        echo "<tr> <th>Mã hàng</th> <th>Tên hàng</th> <th>Mã NSX</th> <th>Năm SX</th> <th>Giá</th> </tr>";

        while ($row = mysqli_fetch_array($result)) {
            
            echo "<tr>";
            echo "<td>" .htmlspecialchars($row['mahang']). "</td>";
            echo "<td>" .htmlspecialchars($row['tenhang']). "</td>";
            echo "<td>" .htmlspecialchars($row['mansx']). "</td>";
            echo "<td>" .htmlspecialchars($row['namsx']). "</td>";
            echo "<td>" .htmlspecialchars($row['gia']). "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
mysqli_close($conn);
?>

