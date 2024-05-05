<?php
include 'mahasiswa.php';

$nim = $_GET['nim'];

if ($mahasiswa->hapusMahasiswa($nim)) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data mahasiswa.";
}
?>
