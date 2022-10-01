<?php

$koneksi = mysqli_connect("localhost", "root","", "web");
$sql='SELECT id_mhs,nama_mhs,nama_prodi,alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi=p.id_prodi';
$hasil= mysqli_query($koneksi,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa Teknik</h2>
  <p>Berikut adalah data dari mahasiswa fakultas teknik: </p> 
  <button type="button" class="btn btn-primary"><a href="form.php" style="color:white">Tambah</a></button>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id_mhs</th>
        <th>nama_mhs</th>
        <th>prodi_mhs</th>
        <th>alamat_mhs</th>
        <th>action</th>

      </tr>
    </thead>
    <tbody>
    <?php
    while($baris=mysqli_fetch_assoc($hasil)){  
?>
      <tr>
        <td><?php echo $baris["id_mhs"];?></td>
        <td><?php echo $baris["nama_mhs"];?></td>
        <td><?php echo $baris["nama_prodi"];?></td>
        <td><?php echo $baris["alamat_mhs"];?></td>
        <td><button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-success">Delete</button></td>
        </tr>
      <?php } 

      ?>
    </tbody>
  </table>
    </div>
</body>
</html>
