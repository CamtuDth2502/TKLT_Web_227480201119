<?php
include "conn.php";

$sql = "select mahang, tenhang from hanghoa";
if ($result = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['mahang'] . " " . $row['tenhang'];
        echo "<br>";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>