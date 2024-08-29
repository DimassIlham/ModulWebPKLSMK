<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Siswa</h2>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $tampil = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id_siswa = '$id'");
    $v = mysqli_fetch_array($tampil);
    ?>

    <form action="act.php" method="post">
        <input type="hidden" name="id_siswa" value="<?= $v['id_siswa']; ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Masukan Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $v['nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Masukan Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $v['alamat']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $v['tanggal_lahir']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="number" class="form-control" name="nisn" id="nisn" value="<?= $v['nisn']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No Hp</label>
            <input type="number" class="form-control" name="no_hp" id="no_hp" value="<?= $v['no_hp']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= $v['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <input type="text" class="form-control" name="hobi" id="hobi" value="<?= $v['hobi']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki - Laki" <?= $v['jenis_kelamin'] == 'Laki - Laki' ? 'selected' : ''; ?>>Laki - Laki</option>
                <option value="Perempuan" <?= $v['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" name="agama" id="agama" required>
                <option value="">Pilih Agama</option>
                <option value="ISLAM" <?= $v['agama'] == 'ISLAM' ? 'selected' : ''; ?>>ISLAM</option>
                <option value="KRISTEN" <?= $v['agama'] == 'KRISTEN' ? 'selected' : ''; ?>>KRISTEN</option>
                <option value="KATHOLIK" <?= $v['agama'] == 'KATHOLIK' ? 'selected' : ''; ?>>KATHOLIK</option>
                <option value="KONGHUCU" <?= $v['agama'] == 'KONGHUCU' ? 'selected' : ''; ?>>KONGHUCU</option>
                <option value="BUDHA" <?= $v['agama'] == 'BUDHA' ? 'selected' : ''; ?>>BUDHA</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data Siswa</button>
    </form>
</div>

<!-- Bootstrap 5.3.3 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
