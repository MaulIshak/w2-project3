<!-- Pesan Alert -->
<?php if (session()->getFlashdata('success')): ?>
  <script>alert("<?= session()->getFlashdata('success'); ?>");</script>
<?php elseif (session()->getFlashdata('error')): ?>
  <script>alert("<?= session()->getFlashdata('error'); ?>");</script>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Biodata Mahasiswa</title>
</head>
<body>
  <!-- CONTAINER -->
  <div class="container mt-5 w-75">
    <h1 class="mb-3">Biodata Mahasiswa</h1>
    
    <!-- Search Bar -->
    <form action="/mahasiswa/search" method="get" class="mb-3">
      <div class="row">
        <div class="col-8">
          <a href="/mahasiswa/create" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>
        </div>
        <div class="col-3">
          <input type="text" class="form-control" name="keyword" placeholder="Keyword" aria-label="Keyword">
        </div>
        <div class="col-1 ">
          <button type="submit" class="btn btn-primary ">Search</button>
        </div>
      </div>
    </form>
    <!-- Tabel Biodata -->
    <table class="table table-bordered table-hover text-center">
      <thead class="table-primary">
        <tr>
          <th>#</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $count = 1;
        foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $count?></td>
          <td><?= esc($mhs['nim']) ?></td>
          <td><?= esc($mhs['nama_lengkap']) ?></td>
          <td class="col-3">
            <a href="/mahasiswa/<?= esc($mhs['nim']) ?>" class="btn btn-info btn-sm">Detail</a>
            <a href="/mahasiswa/edit/<?= esc($mhs['nim']) ?>" class="btn btn-warning btn-sm">Edit</a>
            <form action="/mahasiswa/delete/<?= esc($mhs['nim']) ?>" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>
        <?php 
        $count++;      
        endforeach; ?>
      </tbody>
  </div>

  
</body>
</html>