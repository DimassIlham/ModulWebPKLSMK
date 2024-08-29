<?php
// Masukan file koneksi untuk menghubungkan database
include 'koneksi.php';

// Definisikan Variabel untuk menampung setiap inputan
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$nisn           = $_POST['nisn'];
$no_hp          = $_POST['no_hp'];
$email          = $_POST['email'];
$hobi           = $_POST['hobi'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$agama          = $_POST['agama'];

// proses memasukan kedalam tabel data_siswa
$input = mysqli_query($koneksi,"INSERT INTO data_siswa VALUES('','$nama','$alamat','$tanggal_lahir','$nisn','$no_hp ','$email','$hobi','$jenis_kelamin','$agama')");

// Aksi, Jika Berhasil Disimpan
if ($input) {
    echo "<script>
            alert('Data Anda Sudah Kami Simpan, Silahkan Input Ulang');
            window.location.href='index.php';
          </script>";

// Aksi , Jika Gagal Disimpan
}else{
    echo "<script>
            alert('Data Gagal Disimpan');
            window.location.href='index.php';
          </script>";
}

?>