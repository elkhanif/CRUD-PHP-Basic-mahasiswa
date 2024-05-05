<?php
include 'mahasiswa.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

if ($mahasiswa->updateMahasiswa($nim, $nama, $jurusan)) {
    header("Location: index.php");
} else {
    echo "Gagal mengupdate data mahasiswa.";
}
?>
