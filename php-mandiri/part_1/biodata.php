<!-- 
  Menampilkan biodata mahasiswa dalam tabel, dengan data diambil dari form
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
</head>
<body>
  <section class="table-section">
    <table border="1px">
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
      </tr>
        <?php
          $count = 1;
          if(isset($_POST['nim'])):
            // Mengamankan data dari serangan XSS (Cross Site Scripting)
            $nim = htmlspecialchars(trim($_POST['nim']) ?? '');
            $nama = htmlspecialchars(trim($_POST['nama']) ?? '');
            $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin'] ?? '');
            $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir'] ?? '');

        ?>
      <!-- Memasukkan data dari variable ke tabel -->
      <tr>
        <td><?= $count ?></td>
        <td><?= $nim ?></td>
        <td><?= $nama ?></td>
        <td><?= $jenis_kelamin ?></td>
        <td><?= $tanggal_lahir ?></td>
      </tr>

        <?php
            endif;
        ?>

    </table>
  </section>
  <section class="form-section">
    <h3>Insert Biodata</h3>
    <form method="POST">
      <div>
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim">
      </div>
      <br>
      <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
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
          
</body>


</html>