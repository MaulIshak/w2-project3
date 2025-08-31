<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <div class="container mt-5 w-50">
    <h1 class="mb-5">Detail Mahasiswa</h1>
    <table class="table table-bordered">
    <thead class="table-light">
      <tr>
        <th class="col-2">Atribut</th>
        <th>Nilai</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>NIM</td>
        <td><?= esc($mahasiswa['nim'])?></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><?= esc($mahasiswa['nama_lengkap'])?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?= esc($mahasiswa['jenis_kelamin'])?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><?= esc($mahasiswa['tanggal_lahir'])?></td>
      </tr>
    </tbody>
    </table>
    <a href="/mahasiswa" class="btn btn-primary mt-3">Kembali</a>
  </div>
  
</body>
</html>