<?php

// Definisikan associative array dengan 10 elemen dan 5 field data
$data = array(
    array(
        "no" => "01",
        "foto" => "<img src = '3.jpeg' width ='190' height = '150'>", 
        "nama" => "BANTAI ADAT", 
        "deskripsi" => "<p> Tradisi bantai adat sebagai kearifan lokal</p>
        <p> menyambut bulan Ramadhan bagi masyarakat Merangin Jambi</p>", 
        "tanggal" => "18 sya'ban", 
        "asal" => "Prov Jambi"),

    array(
     "no" => "02",   
     "foto" => "<img src = '4.jpeg' width ='190' height = '150'>",
     "nama" => "UPACARA PEUSIJUEK", 
     "deskripsi" => "<p>peusijuek dilakukan saat seseorang mendapat</p>
     <p>kebahagian atau rahmat dan juga kala seseorang terlepas</p> 
     <p>dari suatu musibah yang menimpanya. Saat prosesi peusijuk digelar,
     <p> orang yang dipercaya untuk mempeusijuek orang lain terlebih</p>
     <p> dahulu membaca Basmallah dan doa.</p>", 
     "tanggal" => "saat kenduri", 
     "asal" => "Prov Aceh"),

    array(
     "no" => "03",   
     "foto" => "<img src = '5.jpeg' width ='190' height = '150'>",
     "nama" => "UPACARA BEGAWI", 
     "deskripsi" => " <p>upacara adat dalam pengambilan gelar tertinggi di</p><p>
     adat lampung pepadun yang telah dilaksanakan dari zaman ke zaman</p>
      <p>oleh masyarakat dalam menanamkan nilai-nilai kebudayaan</p>", 
     "tanggal" => "saat malam hari", 
     "asal" => "Prov Lampung"),

    array(
     "no" => "04",   
     "foto" => "<img src = '6.jpeg' width ='190' height = '150'>",
     "nama" => "SEDEKAH BALAQ", 
     "deskripsi" => "Sedekah Balak dilakukan sebagai bentuk syukur kepada sang pencipta <p>atas karunia rezeki ataupun kesehatan yang dilimpahkan kepada masyarakat OKU Timur", 
     "tanggal" => "saat seeorang<p>terkena balaq", 
     "asal" => "Prov SUMSEL"),

    array(
     "no" => "05",   
     "foto" => "<img src = '7.jpeg' width ='190' height = '150'>",
     "nama" => "DEBUS", 
     "deskripsi" => "kesenian tradisional yang terdapat di provinsi<p>Banten yang menampilkan kekebalan tubuhnya terhadap</p> benda tajam. Kesenian debus memadukan tarian, suara, dan nuansa magis religius", 
     "tanggal" => "saat ada event", 
     "asal" => "Prov Banten"),

    array(
     "no" => "06",   
     "foto" => "<img src = '8.jpg' width ='190' height = '150'>",
     "nama" => "MOLALUNGA", 
     "deskripsi" => "merupakan upacara adat masyarakat Gorontalo<p> yang berhubungan dengan acara pemakaman. </p><p>Kegiatan ini sudah merupakan tradisi masyarakat sejak dahulu</p> yang masih dipertahankan hingga sekarang ini. Dalam pelaksanaannya acara </p>pemakaman dilaksanakan secara terpadu antara adat istiadat dan agama Islam", 
     "tanggal" => "saat ada orang <p>yang meningal", 
     "asal" => " Prov Gorontalo"),

    array(
     "no" => "07",   
     "foto" => "<img src = '9.jpeg' width ='190' height = '150'>",
     "nama" => "KALWEDO", 
     "deskripsi" => "Kalwedo adalah bukti yang sah atas kepemilikan masyarakat adat di Maluku Barat Daya (MBD).<p>Kepemilikan ini merupakan kepemilikan bersama atas kehidupan bersama orang bersaudara", 
     "tanggal" => "saat jumat kliwon", 
     "asal" => "Prov Maluku"),

    array(
     "no" => "08",   
     "foto" => "<img src = '10.jpeg' width ='190' height = '150'>",
     "nama" => "BEDUDU", 
     "deskripsi" => "Bedudu adalah seni tutur masyarakat Dayak Desa. <p>Seni tutur Bedudu sering digunakan dalam prosesi pinangan.<p>Seni tutur bedudu juga memiliki makna <P>sebagai permohonan izin untuk meminang atau melamar seorang gadis", 
     "tanggal" => "sebelum pernikahan", 
     "asal" => "Prov Kalbar"),

    array(
     "no" => "09",   
     "foto" => "<img src = '11.jpeg' width ='190' height = '150'>",
     "nama" => "TABE", 
     "deskripsi" => "budaya tabe adalah, sipakatau (tidak membeda-bedakan),<p> sipakalebbi (salig menghormati), dan sipakainge (saling mengingatkan). <p>Budaya tabe dapat dilakukan dengan cara memberikan senyuman kepada orang yang <p>ingin disapa sambil sedikit menundukkan kepala.", 
     "tanggal" => "saat tanggal <p>1 - 10 muharram", 
     "asal" => "Prov SULSEL"),

    array(
     "no" => "10",   
     "foto" => "<img src = '12.jpeg' width ='190' height = '150'>",
     "nama" => "ARAREM", 
     "deskripsi" => "tradisi pengantaran maskawin yang di lakukan oleh calon <P>suami kepada pihak calon istri. Perangkat dalam tradisi Ararem <P>yaitu piring (ben), gelang (sanfarf) dan uang", 
     "tanggal" => "sebelum pernikahan", 
     "asal" => "Prov PAPUA"),
);
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .foto {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
    // Menampilkan data dalam bentuk tabel HTML
    
echo "<table border='1'>";
echo "<tr><th>No</th><th>FOTO</th><th>NAMA BUDAYA</th><th>DESKRIPSI</th><th>PElAKSANAAN</th><th>ASAL</th></tr>";

// Menggunakan loop untuk menampilkan data ke dalam tabel
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['no'] . "</td>";
    echo "<td>" . $row['foto'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['deskripsi'] . "</td>";
    echo "<td>" . $row['tanggal'] . "</td>";
    echo "<td>" . $row['asal'] . "</td>";
    echo "</tr>";
}

echo "</table>";


    ?>

</body>
</html>



