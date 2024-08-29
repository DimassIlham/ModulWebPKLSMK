<?php
include 'koneksi.php';

$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nisn = $_POST['nisn'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$hobi = $_POST['hobi'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];

// Query UPDATE yang benar
$query = "UPDATE data_siswa SET 
          nama = '$nama', 
          alamat = '$alamat', 
          tanggal_lahir = '$tanggal_lahir', 
          nisn = '$nisn', 
          no_hp = '$no_hp', 
          email = '$email', 
          hobi = '$hobi', 
          jenis_kelamin = '$jenis_kelamin', 
          agama = '$agama' 
          WHERE id_siswa = '$id_siswa'";

$update = mysqli_query($koneksi, $query);

if ($update) {
    echo "<script>
            alert('Data berhasil diupdate');
            window.location.href='index.php';
          </script>";
} else {
    echo "<script>
            alert('Data gagal diupdate');
            window.location.href='index.php';
          </script>";
}
?>
