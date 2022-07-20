<html>
<head>
    <title>Responsi Pemrograman Web</title>
    <link rel="stylesheet" type="text/css" href="eksternal.css">
</head>
<body>
	<SCRIPT language="JavaScript" src="nama.js"></SCRIPT>
    <h1 align="center">Form Jasa Pengiriman</h1>
    <form method="POST" action="process.php">
        <table>
            <tr>
                <td>Nama Jasa Pengiriman</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jarak (dalam KM)</td>
                <td>:</td>
                <td><input type="text" name="jarak"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Simpan">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
            
        </table>
    </form>
    <a href=list.php>::Lihat list data::</a><br>
  

</body>
</html>