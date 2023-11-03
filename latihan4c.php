<?php 
$asean = [
    "Indonesia" => "D.K.I jakarta",
    "Singapura" => "Singapura",
    "Malaysia"  => "Kuala Lumpur",
    "Brunei"    => "BandarSeriBegawan",
    "Thailand"  => "Bangkok",
    "Laos"      => "Vientiane",
    "Filipina"  => "Manila",
    "Myanmar"   => "Naypyidaw",
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas3c</title>
</head>
<body>

    <?php 
    echo "<ul>";
    foreach ($asean as $negara => $kota) {
         echo "<li>$negara : $kota</li>" ;
    }
    echo "</ul>";
    ?>
</body>
</html>