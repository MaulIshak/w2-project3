  <?php  
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

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Biodata</title>
</head>
<body>
  <h1>Detail Biodata</h1>
  <section class="detail-section">
    <div>
      <label for="nim">NIM: </label>
      <span><?php if(isset($result['nim'])) echo $result['nim'] ?></span>
    </div>
    <br>
    <div>
      <label for="nama_lengkap">Nama Lengkap: </label>
      <span><?php if(isset($result['nama_lengkap'])) echo $result['nama_lengkap'];?></span>
    </div>
    <br>
    <div>
      <label for="jenis_kelamin">Jenis Kelamin: </label>
      <span><?php 
        if(isset($result['jenis_kelamin'])){
          if($result['jenis_kelamin'] == 'L'){
            echo "Laki-laki";
          } else {
            echo "Perempuan";
          }
        }
      ?></span>
    </div>
    <br>
    <div>
      <label for="tanggal_lahir">Tanggal Lahir: </label>
      <span><?php if(isset($result['tanggal_lahir'])) echo $result['tanggal_lahir'];?></span>
    </div>
    <br>
    <div>
      <a href="list_biodata.php">Kembali ke List Biodata</a>
    </div>
</body>
</html>