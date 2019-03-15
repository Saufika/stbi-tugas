<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>18.01.55.5004</title>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mine.css">
	<link rel="stylesheet" href="css/base.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
<section id="about">
		<div class="container" style="margin-top:50px">
		    <div class ="col-sm-12 text-center">
			<h2>Data Mahasiswa</h2>
		</div>
		<!-- row 3-->
		<div class="row">
		<?php
include "koneksi.php";
    $query = mysqli_query($connection,"SELECT * FROM mahasiswa");
?>

    <table class="table table-striped table-bordered table-hover">
        <tr>
             <th  class="success">No</th>
            <th  class="success">NIM</th>
			<th  class="success">Nama</th>
            <th  class="success">Prodi</th>
           
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["nama"];?></td>
			<td><?php echo $data["prodi"];?></td>
            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
		</div>
	</div>
</section>

  <footer>
	 
  </footer>
	<script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>
