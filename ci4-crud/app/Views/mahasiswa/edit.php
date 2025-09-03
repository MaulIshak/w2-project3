<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>
  <div class="container mt-5 w-50">
    <h1>Edit Mahasiswa</h1>
    <form action="/mahasiswa/update/<?=$mahasiswa['nim']?>" method="post">
      <div class="form-group mb-3">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" id="nim" name="nim" value="<?= esc($mahasiswa['nim']) ?>" readonly>
      </div>
      
      <div class="form-group mb-3">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= esc($mahasiswa['nama_lengkap']) ?>" required>
      </div>
      
      <div class="form-group mb-3">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" class="form-select" name="jenis_kelamin" required>
          <option value="L" <?= $mahasiswa['jenis_kelamin'] === 'L' ? 'selected' : '' ?>>Laki-laki</option>
          <option value="P" <?= $mahasiswa['jenis_kelamin'] === 'P' ? 'selected' : '' ?>>Perempuan</option>
        </select>
      </div>
      
      <div class="form-group mb-3">
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" class="form-control form-date" id="tanggal_lahir" name="tanggal_lahir" value="<?= esc($mahasiswa['tanggal_lahir']) ?>" required>
      </div>
      <a href="/mahasiswa" class="btn btn-danger mt-3">Batal</a>
      <input type="hidden" name="_method" value="PUT">
      <input type="submit" value="Update" class="btn btn-primary mt-3">
    </form>
  </div>
  <?= $this->endsection(); ?>