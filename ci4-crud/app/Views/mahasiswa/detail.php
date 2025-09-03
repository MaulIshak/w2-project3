<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>
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
  <?= $this->endsection(); ?>

