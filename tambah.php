<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Siswa</title>
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Tambah Siswa Baru</h2>
    <form action="add_siswa.php" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Masukan Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Masukan Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="number" class="form-control" name="nisn" id="nisn" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No Hp</label>
            <input type="number" class="form-control" name="no_hp" id="no_hp" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <input type="text" class="form-control" name="hobi" id="hobi" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="" selected>Pilih Jenis Kelamin</option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" name="agama" id="agama" required>
                <option value="" selected>Pilih Agama</option>
                <option value="ISLAM">ISLAM</option>
                <option value="KRISTEN">KRISTEN</option>
                <option value="KATHOLIK">KATHOLIK</option>
                <option value="KONGHUCU">KONGHUCU</option>
                <option value="BUDHA">BUDHA</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data Siswa</button>
    </form>
</div>

<!-- Bootstrap 5.3.3 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
