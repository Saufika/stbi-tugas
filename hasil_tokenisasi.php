<?php
//membuat koneksi ke database
	$host='localhost';
	$user='root';
	$password='';
	$database='dbstbi';
	
	$konek_db=mysqli_connect($host,$user,$password,$database);
?>
<html>
<title>Tokenisasi</title>
<body style="background-color:#F8F8FF">
<center>
<h1 style="background-color:#808080">INFORMATION RETRIEVAL</h1>
<br>
<input type="button" value="Upload File PDF" onClick="window.open('upload.php')" button class="btn upload"> </button>
<input type="button" value="Home" onClick="window.open('index.php')" button class="btn home"> </button><br><br>

<center>
<h3>HASIL TOKENISASI DAN STEMMING</h3><br>

<!-- //////////Script untuk membuat tabel////////// -->
<table border='1' width='800'>
<tr>
	<th>Nama File</th>
	<th>Tokenisasi</th>
	<th>Token Stem</th>
</tr>

<?php
//Perintah untuk menampilkan data
$queri="Select * From dokumen" ; //menampilkan SEMUA
$hasil=mysqli_query($konek_db, $queri);  //fungsi untuk SQL

//perintah untuk membaca dan mengambil data dalam bentuk array
while ($data=mysqli_fetch_array($hasil)){
echo"
	<tr>
	<td>".$data['nama_file']."</td>
	<td>".$data['token']."</td>
	<td>".$data['tokenstem']."</td>
	</tr>
	";
}
?>
</table>
</center>
</body>
</html>
	