<?php
include "conn.php";

// in ds hang hoa 

$sql = "select * from hanghoa";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['mahang'] . " ";
            echo $row['tenhang'] . " ";
            echo $row['mansx'] . " ";
            echo $row['namsx'] . " ";
            echo $row['gia'] . " ";
            echo "<br>";
        }
    }
}

?>