<html>
<head>
<title>Hasil Kata Kunci</title>

<body style="background-color:#F8F8FF">
<center>
<h1 style="background-color:#808080">INFORMATION RETRIEVAL</h1>
<br>
<input type="button" value="Home" onClick="window.open('index.php')" button class="btn home"> </button><br><br>

<table border=1 width=100%>
	<th>Nama</th>
	<th>Token</th>
	<th>Stem</th>

<?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbstbi";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST['katakunci'];
//$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'";
$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";
echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
			<tr>
				<td>".$row['nama_file']."</td>
				<td>". $row['token'] . "</td>
				<td>" . $row['tokenstem'] . "</td>
			</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
'</table>'
///
?>
</head>
</body>
</html>