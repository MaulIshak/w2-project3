  <?php
    include 'koneksi_db.php';
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['nim'])){
      // Membuat variable setiap field inputan
      $nim = $_POST['nim'];
      $nama = $_POST['nama_lengkap'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $tanggal_lahir = $_POST["tanggal_lahir"];

      // Membuat Query
      $query = "INSERT INTO biodata (nim, nama_lengkap, jenis_kelamin, tanggal_lahir) VALUES('".$nim."', '".$nama."', '".$jenis_kelamin."','".$tanggal_lahir."')";

      $result = mysqli_query($conn, $query);
      if($result){
        echo "<script>alert('Data Berhasil di tambahkan!');
        window.location.href = 'list_biodata.php';
        </script>";
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
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
    <h3>Insert Biodata</h3>
    <form method="POST">
      <div>
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim">
      </div>
      <br>
      <div>
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap">
      </div>
      <br>
      <div>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" id="laki-laki" value="L" checked>
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" id="perempuan" value="P">
        <label for="perempuan">Perempuan</label>
      </div>
      <br>
      <div>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
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