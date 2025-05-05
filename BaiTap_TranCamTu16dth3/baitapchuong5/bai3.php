<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Câu a</h2>
    <?php 
        $x = 3;
        $y = 5;

        $cong = $x + $y;
        $tru = $x - $y;
        $nhan = $x * $y;
        $chia = $x % $y;

        echo "<p>x = $x ; y = $y";
        echo "<p>Cộng: $cong </p>";
        echo "<p>Trừ: $tru </p>";
        echo "<p>Nhân: $nhan </p>";
        echo "<p>Chia: $chia </p>";
    ?>

    <h2>Câu b</h2>

    <?php 
        $x = rand(1,100);
        $y = rand(1,100);

        $cong = $x + $y;
        $tru = $x - $y;
        $nhan = $x * $y;
        $chia = $x % $y;

        echo "<p>x = $x ; y = $y";
        echo "<p>Cộng: $cong </p>";
        echo "<p>Trừ: $tru </p>";
        echo "<p>Nhân: $nhan </p>";
        echo "<p>Chia: $chia </p>";
     ?>
    <h2>Câu c</h2>

    <?php
         $x = rand(1,100);
         $y = rand(1,100);

         while ($x <= $y) {
            $y = rand(1, 100);
         }
         $cong = $x + $y;
         $tru = $x - $y;
         $nhan = $x * $y;
         $chia = $x % $y;

         echo "<p>x = $x ; y = $y";
         echo "<p>Cộng: $cong </p>";
         echo "<p>Trừ: $tru </p>";
         echo "<p>Nhân: $nhan </p>";
         echo "<p>Chia: $chia </p>";
    ?>
</body>
</html>