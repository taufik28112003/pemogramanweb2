<?php
// Membuat array multidimensi dengan negara, ibukota, dan kode telepon
$negara_asia = array(
    array("negara" => "Indonesia", "ibukota" => "Jakarta", "kode_telepon" => "+62"),
    array("negara" => "Singapore", "ibukota" => "Singapore", "kode_telepon" => "+65"),
    array("negara" => "Malaysia", "ibukota" => "Kuala Lumpur", "kode_telepon" => "+60"),
    array("negara" => "Brunei", "ibukota" => "BandarSeriBegawan", "kode_telepon" => "+673"),
    array("negara" => "Thailand", "ibukota" => "Bangkok", "kode_telepon" => "+66"),
    array("negara" => "Laos", "ibukota" => "Vientiane", "kode_telepon" => "+856"),
    array("negara" => "filipina", "ibukota" => "Manila", "kode_telepon" => "+63"),
    array("negara" => "Myanmar", "ibukota" => "Naypyidaw", "kode_telepon" => "+95"),
);

// Menampilkan isi array dalam bentuk tabel
echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($negara_asia as $negara) {
    echo "<tr><td>{$negara['negara']}</td><td>{$negara['ibukota']}</td><td>{$negara['kode_telepon']}</td></tr>";
}
echo "</table>";
?>