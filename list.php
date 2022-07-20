<?php 

echo "<head><title>Responsi Pemrograman Web</title></head>";
$fp = fopen("jasa.txt", "r");
echo "<h1 align=center><b>Tabel List Data Jasa Pengiriman</b></h1>";
echo "<center><a href='index.php'> ::Tambah Data Jasa Pengiriman:: </a></center><br>";
echo "<table border='1' align=center width=1250px>";
 echo "<tr><td width=200px>Tanggal";
    echo "<td width=200px>Nama Jasa Pengiriman";
    echo "<td width=200px>Biaya Pengiriman (per KM)";
    echo "<td width=200px>Jarak (dalam KM)";
    echo "<td width=200px>Total Biaya";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>$pisah[0]</td>";
    echo "<td>$pisah[1]</td>";
    echo "<td>$pisah[3]</td>";
    echo "<td>$pisah[2]</td>";
    echo "<td>$pisah[4]</td>";
   
}

echo "</table>";


?>
