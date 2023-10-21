<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            margin: 5px;
            float: left;
            text-align: center;
            line-height: 50px;
        }
        .clear{
            clear: both;
        }
        .ganjil{
            background-color: #003;
            color: #fff;
        }
        .genap{
            background-color: #999;
        }
    
    </style>
</head>
<body>
    <?php
    $jumlah_baris=5;
    $jumlah_kolom=5;

        for($i=1; $i <= $jumlah_baris; $i++){
            for ($j = 1 ;$j <= $i; $j++){
                $class = ($i % 2 == 0) ? 'genap' : 'ganjil';
                echo '<div class= "kotak ' .$class . '">' . $j . '</div>';
            }
            echo '<div class ="clear"></div>';
        
        }
        ?>
</body>
</html>