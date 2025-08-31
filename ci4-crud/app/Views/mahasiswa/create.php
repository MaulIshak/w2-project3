<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Create Mahasiswa</title>
</head>
<body>
  <div class="container mt-5 w-75">
    <h1>Tambah Data Mahasiswa</h1>
    <form action="/mahasiswa/store" method="post"> 
      <div class="form-group mb-3">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" id="nim" name="nim" required>
      </div>
      
      <div class="form-group mb-3">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
      </div>
      
      <div class="form-group mb-3">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" class="form-select" name="jenis_kelamin" required>
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>
      
      <div class="form-group mb-3">
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" class="form-date" id="tanggal_lahir" name="tanggal_lahir" required>
      </div>
      <a href="/mahasiswa" class="btn btn-danger mt-3">Batal</a>
      <input type="submit" value="Simpan" class="btn btn-primary mt-3">
    </form>

  </div>
  
</body>
</html>