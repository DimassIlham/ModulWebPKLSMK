<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content Area -->
<div class="container mt-5">
    <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
    <br/>
    <a href="tambah.php" class="btn btn-success mb-3">+ TAMBAH MAHASISWA</a>
    <br/>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>ALAMAT</th>
                <th>Tanggal Lahir</th>
                <th>NISN</th>
                <th>No Hp</th>
                <th>Email</th>
                <th>Hobi</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from data_siswa");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['tanggal_lahir']; ?></td>
                    <td><?php echo $d['nisn']; ?></td>
                    <td><?php echo $d['no_hp']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['hobi']; ?></td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id_siswa']; ?>" class="btn btn-warning btn-sm">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id_siswa']; ?>" class="btn btn-danger btn-sm">HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap 5.3.3 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
