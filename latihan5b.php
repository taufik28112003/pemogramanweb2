<?php
$mahasiswa = (
	("nama" => "BANTAI ADAT", 
     "deskripsi" => "<p> Tradisi bantai adat sebagai kearifan lokal</p>
        <p> menyambut bulan Ramadhan bagi masyarakat Merangin Jambi</p>", 
     "tanggal" => "18 sya'ban", 
     "asal" => "Prov Jambi",
     "foto" => "<img src = '3.jpeg' width ='190' height = '150'>"),
	
	("nama" => "UPACARA PEUSIJUEK", 
     "deskripsi" => "<p>peusijuek dilakukan saat seseorang mendapat</p>
     <p>kebahagian atau rahmat dan juga kala seseorang terlepas</p> 
     <p>dari suatu musibah yang menimpanya. Saat prosesi peusijuk digelar,
     <p> orang yang dipercaya untuk mempeusijuek orang lain terlebih</p>
     <p> dahulu membaca Basmallah dan doa.</p>", 
     "tanggal" => "saat kenduri", 
     "asal" => "Prov Aceh",
     "foto" => "<img src = '4.jpeg' width ='190' height = '150'>"),

);

?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Get</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>
				<a href="latihan5.php?nama=<?= $mhs["nama"];?>"><?= $mhs["nama"]; ?>&tanggal= <?= $mhs["tanggal"]; ?> &asal=<?= $mhs["asal"];?>&foto=<?= $mhs ["foto"];?>&deskripsi=<?= $mhs ["deskripsi"];?></a>
			</li>
		<?php endforeach; ?>	
		</ul>

</body>
</html>
