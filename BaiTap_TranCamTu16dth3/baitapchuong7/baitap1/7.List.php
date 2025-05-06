<?php
include "1.connection.php";

if (isset($_POST['indl'])) {

    if (!isset($_POST['duLieu']) || empty($_POST['duLieu'])) {
        echo "<p style='color: red;'>Vui lòng chọn một bảng dữ liệu!</p>";
        exit;
    }

    $selectedTable = $_POST['duLieu']; 

    $cacBang = ['hanghoa', 'khachhang', 'nhasanxuat', 'hoadon'];
    if (!in_array($selectedTable, $cacBang)) {
        echo "<p style='color: red;'>Lựa chọn không hợp lệ!</p>";
        exit;
    }

    $query = "SELECT * FROM $selectedTable";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<p style='color: red;'>Lỗi truy vấn: " . mysqli_error($conn) . "</p>";
        exit;
    }

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Danh sách " . ucfirst($selectedTable) . "</h2>";
        echo "<table border='1' style='border-collapse: collapse; width: 100%; max-width: 800px; margin-top: 20px;'>";

        $fields = mysqli_fetch_fields($result);
        echo "<tr style='background-color: #4CAF50; color: white;'>";
        foreach ($fields as $field) {
            echo "<th style='padding: 10px;'>" . $field->name . "</th>";
        }
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td style='padding: 10px;'>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Không có dữ liệu trong bảng $selectedTable.</p>";
    }

    mysqli_free_result($result);
}

mysqli_close($conn);
?>
