<?php 
	
	 if(isset($_POST['hitung'])){

	 	$tanggal	= date("Y-m-d");
        $nama		=$_POST['nama'];
        $jarak		=$_POST['jarak'];
        $biaya		= 5000;
        $total		=$jarak*$biaya;
     }
	
	echo "<head><title>Responsi Pemrograman Web</head></title>";
	$fp = fopen("jasa.txt", "a+");
	fputs($fp,"$tanggal|$nama|$jarak|$biaya|$total\n");
	fclose($fp);

	echo "<h2 align=center>Terima Kasih Telah Mengisi Data Jasa Pengiriman</h2><br><br>";
	echo "Menu : ";
	echo "</br></br>";
	echo "<a href=index.php>::Tambah Data::</a><br>";
	echo "<a href=list.php>::Lihat list data::</a><br>";

?>