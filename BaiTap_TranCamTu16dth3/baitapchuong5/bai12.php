<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bàn Cờ Vua</title>
    <style>
        .out {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 400px;
            height: 400px;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 30px;
        }
        .black {
            background-color: black;
            color: white;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<div class="out">
    <table border="2">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                $class = ($row + $col) % 2 == 0 ? "white" : "black";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
