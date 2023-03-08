<?php
$connect=mysqli_connect('localhost','root','','KoperasiKolej')
or die('gagal disambung ke db');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	body {
		background-color: #FFC0CB;
	}

	h2 {
		text-align: center;
	}
</style>
<body>
	<center>
	    <img src="image1.jpg" width="200px" height="200px">
    </center>

	<h2>SENARAI NAMA BUKU</h2>

	<center>
		<table border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
			<tr>
				<td>KOD BUKU</td>
				<td>NAMA BUKU</td>
				<td>JENIS BUKU</td>
				<td>HARGA BUKU</td>
				<td>TAHUN TERBITAN</td>
			</tr>

						</tr>
		
        <?php
		$papar=mysqli_query($connect, "SELECT * FROM jadualbuku");
	    while($row=mysqli_fetch_array($papar)){
	    	echo "
	    	<tr>
            <td>".$row['Kod_buku']."</td>
            <td>".$row['Nama_buku']."</td>
            <td>".$row['Jenis_buku']."</td>
            <td>".$row['Harga_buku']."</td>
            <td>".$row['Tahun_terbit']."</td>
	    	</tr>
	    	";
	    }
		?>
		
	</table>
	</center>
</body>
</html>
A
