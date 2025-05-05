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
            font-family: 'Times New Roman';
        }

        .out_form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .in_form {
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            background-color: darkcyan;
            border-radius: 7px 7px 0px 0px;
            color: white;
            padding: 10px;
        }
        .f {
            padding: 0px 30px 20px 30px;
            margin-top: 30px;
        }

        input[type=text] {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .passW, .maSo, .buTon {
            margin-top: 20px;
        }

        input[type=password] {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .iMeo {
            width: 100%;
        }

        #e_f {
            width: 71%;
            background-image: url(mail.png);
            background-repeat: no-repeat;
            background-position: right;
        }

        #e_l {
            width: 27%;
        }

        .passW {
            width: 100%;
        }

        #pass_w {
            width: 85%;
            background-image: url(lock.png);
            background-repeat: no-repeat;
            background-position: right;
        }

        #hien {
            padding: 10px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            background-color:darkcyan;
            color: white;
        }

        #hien:hover {
            background-color: deeppink;
        }

        #ma_so {
            width: 100%;
            background-image: url(barcode.png);
            background-repeat: no-repeat;
            background-position: right;
        }

        .LS {
            width: 100%;
            padding: 10px 0px 10px 0px;
            border: none;
            border-radius: 5px;
            background-color: darkcyan;
            color: white;
            font-weight: bold;
            font-size: 17px;
        }

        .LS:hover {
            background-color:deeppink;
        }
    </style>
</head>
<body>
    <div class="out_form">
        <form method="post">
            <div class="in_form">
                <h2>Đăng nhập thành viên</h2>
                <div class="f">
                    <div class="iMeo">
                        <input type="text" name="i_meo_name" id="e_f" placeholder="Email name">
                        <input type="text" name="i_meo_ac" id="e_l" placeholder="@blu.edu.vn" >
                    </div>
        
                    <div class="passW">
                        <input type="password" name="ps" id="pass_w" placeholder="Password">
                        <input type="submit" name="ok" id="hien" value="Hiện">
                    </div>
        
                    <div class="maSo">
                        <input type="text" name="ma_so" id="ma_so" placeholder="Mã số">
                    </div>
        
                    <div class="buTon">
                        <input type="submit" name="dangNhap" class="LS" value="Đăng nhập">
                        <input type="submit" name="dangKy" class="LS" value="Đăng ký" style="margin-top: 10px;">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>