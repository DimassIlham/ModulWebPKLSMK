<?php

include 'koneksi.php';
$id =$_GET['id'];

$hapus =mysqli_query($koneksi,"DELETE FROM data_siswa WHERE id_siswa ='$id'");


if ($hapus) {
    echo "<script>
            alert('Data Anda Sudah Berhasil di hapus');
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
