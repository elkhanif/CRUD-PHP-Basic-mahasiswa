<?php
include 'mahasiswa.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

if ($mahasiswa->tambahMahasiswa($nim, $nama, $jurusan)) {
    header("Location: index.php");
} else {
    echo "Gagal menambahkan mahasiswa.";
}
?>
