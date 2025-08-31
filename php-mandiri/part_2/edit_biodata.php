  <?php
    // Menampilkan detail biodata dan aksi update data


    include 'koneksi_db.php';

    $nim = $_GET["nim"];
    $query = '';
    $result =[];

    if(!empty($nim)){
      // Membuat Query mencari data berdasarkan NIM
      $query = "SELECT * FROM biodata WHERE nim='" .$nim ."'"; 
      $queryResult = mysqli_query($conn, $query);
      $result = mysqli_fetch_array($queryResult);
    }

    if(isset($_POST['nim'])){
      // Membuat Query Update 
      $query = 'UPDATE biodata SET nim='. "'" .$_POST['nim'] . "'" . ',nama_lengkap=' . "'" .$_POST['nama_lengkap'] . "'" . ',jenis_kelamin=' . "'" .$_POST['jenis_kelamin'] . "'" . ',tanggal_lahir=' . "'" .$_POST['tanggal_lahir'] . "'" . ' WHERE nim=' . "'" .$nim . "'";
      $updateResult = mysqli_query($conn, $query);
      if($updateResult){
        // Jika berhasil update data, maka akan kembali ke halaman list_biodata.php
        echo "<script>alert('Data Berhasil di update!');
        window.location.href = 'list_biodata.php';
        </script>";
      } else {
        echo "<script>alert('Data Gagal di update!')</script>";
      }
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
  <section class="form-section">
    <h3>Update Biodata</h3>
    <form method="POST">
      <div>
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="<?php if(isset($result['nim'])) echo $result['nim'] ?>">
      </div>
      <br>
      <div>
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php if(isset($result['nama_lengkap'])) echo $result['nama_lengkap'];?>">
      </div>
      <br>
      <div>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <!-- Cek apakah jenis_kelamin 'L' atau 'P', jika 'L', maka yang laki-laki checked, begitu juga sebaliknya -->
        <input type="radio" name="jenis_kelamin" id="laki-laki" value="L" <?= (isset($result['jenis_kelamin']) && $result['jenis_kelamin'] == 'L') ? 'checked' : '' ?>  >
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" id="perempuan" value="P"  <?= (isset($result['jenis_kelamin']) && $result['jenis_kelamin'] == 'P') ? 'checked' : '' ?> >
        <label for="perempuan">Perempuan</label>
      </div>
      <br>
      <div>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php if(isset($result['tanggal_lahir'])) echo $result['tanggal_lahir']; ?>">
      </div>
      <br>
      <button type="submit">Submit</button>
    </form>
  </section>
  <br>
    <div>
      <a href="list_biodata.php">Back</a>
    </div>
</body>


</html>