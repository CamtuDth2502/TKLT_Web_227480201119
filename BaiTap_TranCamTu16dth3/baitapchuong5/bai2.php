<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
    <style>
       input {
        margin-top: 10px;
       }

    </style>
</head>
<body>

    <h2>Câu a</h2>
    <?php 
        $ho_ten = "Trần Cẩm Tú";
        $ngay_sinh ="25/02/2004";
        $lop = "16DTH3";
        $diem = 8.5;
    ?>

    <p>Họ và tên: <?php echo $ho_ten; ?></p>
    <p>Ngày sinh: <?php echo $ngay_sinh; ?>  </p>
    <p>Lớp:  <?php echo $lop; ?> </p>
    <p>Điểm:  <?php echo $diem; ?></p>

    <h2>Câu b</h2>

    <form action="" method="post">
        <div class="ipgr">
            <label for="">Họ và tên: </label>
            <input type="text" name="hoten" placeholder="Nhập họ tên">
        </div>

        <div class="ipgr">
            <label for="">Ngày sinh: </label>
            <input type="text" name="ngaysinh" placeholder="Nhập ngày sinh">
        </div>

        <div class="ipgr">
            <label for="">Lớp: </label>
            <input type="text" name="lop" placeholder="Nhập lớp">
        </div>

        <div class="ipgr">
            <label for="">Điểm: </label>
            <input type="text" name="diem" placeholder="Nhập điểm">
        </div>

        <input type="submit" name="ok" value="OK">
    </form>

    <?php
    if (isset($_POST['ok'])) {
        $ten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $lop = $_POST['lop'];
        $diem = $_POST['diem'];

        echo "<p>Họ và tên: $ten <br>Ngày sinh: $ngaysinh <br>Lớp: $lop <br>Điểm: $diem</p>";
    }
    ?>
</body>
</html>