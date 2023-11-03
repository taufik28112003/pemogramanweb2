
<?php
// Membuat array dengan 5 elemen negara ASEAN
echo "<h3>Daftar Negara ASEAN awal:</h3>";
$asean = array("Indonesia", "Singapore", "Malaysia", "Brunei", "Thailand");

// Menampilkan isi array sebagai daftar HTML
echo "<ul>";
foreach ($asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan 3 elemen baru dengan array_push dan menggabungkannya secara vertikal
array_push($asean, "Laos","Philippines", "Myanmar");

// Menampilkan isi array setelah penambahan elemen baru
echo "<h3>Daftar Negara ASEAN baru:</h3>";
echo "<ul>";
foreach ($asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>