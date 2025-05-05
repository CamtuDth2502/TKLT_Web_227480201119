<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .out_form {
            width: 100%;
            align-items: center;
            justify-content: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .in_form {
            border: 1px solid black;
            border-radius: 8px;
            padding: 20px;
        }

        hr {
            height: 2px;
            background-color: black;
        }

        .mot, .hai, .btn, .kq {
            margin-top: 20px;
        }

        input[type=submit] {
            padding: 10px;
            font-weight: bold;
        }

        input[type=text] {
            width: 70%;
            margin-left: 20px;
            padding: 5px;
        }

    </style>
</head>
<body>
    <div class="out_form">
        <form action="" method="post">
            <div class="in_form">
                <h1>TÍNH USCLN VÀ BSCNN</h1>
                <hr>
                <div class="mot">
                    <label for="" >Số thứ 1: </label>
                    <input type="text" name="so_1">
                </div>

                <div class="hai">
                    <label for="">Số thứ 2: </label>
                    <input type="text" name="so_2" >
                </div>

                <div class="kq">
                    <label for="">Kết quả: </label>
                    <input type="text" id="ket_qua" style="margin-left: 23px;">
                </div>

                <div class="btn">
                    <input type="submit" name="ucln" value="USCLN">
                    <input type="submit" name="bcnn" value="BSCNN">
                </div>
            </div>
        </form>
    </div>

    <?php 

        function uscln($a, $b) {
            while  ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        function bscnn($a, $b) {
            return ($a * $b) / uscln($a, $b);
        }

        if (isset($_POST['ucln']) && ($_POST['ucln'])) {
            $so_nhat = intval($_POST['so_1']);
            $so_hai = intval($_POST['so_2']);
            
            if ($so_nhat > 0 && $so_hai > 0) {
                $ket_qua = uscln ($so_nhat, $so_hai);
                echo "<script>document.getElementById('ket_qua').value = '$ket_qua'; </script>";
            }
            else {
                echo "<script> alert('vui lòng nhâp số nguyên dương!');<script>";
            }
        }

        if (isset($_POST['bcnn']) && ($_POST['bcnn'])) {
            $so_nhat = intval($_POST['so_1']);
            $so_hai = intval($_POST['so_2']);
            
            if ($so_nhat > 0 && $so_hai > 0) {
                $ket_qua = bscnn ($so_nhat, $so_hai);
                echo "<script>document.getElementById('ket_qua').value = '$ket_qua'; </script>";
            }
            else {
                echo "<script> alert('vui lòng nhâp số nguyên dương!');<script>";
            }
        }
    ?>
</body>
</html>