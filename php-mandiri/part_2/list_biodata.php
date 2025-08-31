<?php
  // Menampilkan list biodata mahasiswa yang ada di database

  include 'koneksi_db.php';
  $query = "SELECT * FROM `biodata`";
  $result = mysqli_query($conn, $query);

  if(isset($_POST['delete'])){
    $nim = $_POST['nim'];
    $query_delete = "DELETE FROM `biodata` WHERE `nim`='$nim'";
    mysqli_query($conn, $query_delete);
    header("Location: list_biodata.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
</head>
<body>
  <h2>List Mahasiswa</h2>
  <div>
    <a href="biodata_db.php">+Tambah Mahasiswa</a>
  </div>
  <br>
  <section class="table-section">
    <table border="1px">
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Aksi</th>
      </tr>
        <?php
          $count = 1;
          if(!empty($result)){
            // loop semua data dari hasil query
            foreach($result as $data){

        ?>

      <!-- Loop tabel -->
      <tr>
        <td><?= $count ?></td>
        <td><?= $data["nim"] ?></td>
        <td><?= $data["nama_lengkap"] ?></td>
        <td><a href="detail_biodata.php?nim=<?= $data['nim'] ?>">Detail</a> | <a href="edit_biodata.php?nim=<?= $data['nim'] ?>">Edit</a> | <form action="" method="post" style="display:inline;">
          <input type="hidden" name="nim" value="<?= $data['nim'] ?>">
          <button type="submit" name="delete" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form></td>
      </tr>

      
        <?php
            $count++;
            }
          }

        ?>

    </table>
  </section>
          
</body>


</html>