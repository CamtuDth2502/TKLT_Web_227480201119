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

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        .out {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .hang {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="out">
        <div class="in">
            <div class="hang">
                <?php
                for ( $i = 1; $i <= 5; $i++) {
                    echo "<div class='hang_1'>";

                    for ($j = 1; $j <=10 ; $j++) {
                        echo "$i x $j = ".($i * $j)."<br>";
                    }
                    echo "</div>";
                } 
                ?>
            </div>

            <div class="hang">
            <?php
                for ( $i = 6; $i <= 10; $i++) {
                    echo "<div class='hang_1'>";

                    for ($j = 1; $j <=10 ; $j++) {
                        echo "$i x $j = ".($i * $j)."<br>";
                    }
                    echo "</div>";
                } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>