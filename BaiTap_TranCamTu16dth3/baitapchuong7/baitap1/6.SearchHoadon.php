<?php
include "1.connection.php";

if (isset($_POST['search'])) {
    $makh = $_POST['makh'];

    if ($makh) {
        $sql = "select * from hoadon where makh = '$makh'";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0 ) {
                echo "<table border='1px solid black'>";
                
                echo "<tr><th>Mã HD</th><th>Mã KH</th><th>Mã hàng</th><th>SL</th><th>TT</th></tr>";

                while ($row = mysqli_fetch_array($result)) {

                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['mahd']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['makh']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['mahang']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['soluong']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['thanhtien']) . "</td>";
                    echo "</tr>";
                }

                echo "</table>";

            } else {
                echo "Không tìm thấy hóa đơn";
            }
        }
    } else {
        echo "Vui lòng nhập mã kh";
    }
} 
mysqli_close($conn);
?>

