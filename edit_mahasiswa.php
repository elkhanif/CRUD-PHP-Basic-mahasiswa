<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Form Edit Mahasiswa</h2>
    <?php
    include 'mahasiswa.php';

    $nim = $_GET['nim'];
    $mahasiswas = $mahasiswa->getAllMahasiswa(); // Ambil semua data mahasiswa

    // Cari mahasiswa berdasarkan NIM
    $mahasiswa = null;
    foreach ($mahasiswas as $mhs) {
        if ($mhs['nim'] == $nim) {
            $mahasiswa = $mhs;
            break;
        }
    }

    if ($mahasiswa) {
        echo "<form action='proses_edit.php' method='POST'>";
        echo "<input type='hidden' name='nim' value='" . $mahasiswa['nim'] . "'>";
        echo "<label>Nama:</label>";
        echo "<input type='text' name='nama' value='" . $mahasiswa['nama'] . "' required><br>";
        echo "<label>Jurusan:</label>";
        echo "<input type='text' name='jurusan' value='" . $mahasiswa['jurusan'] . "' required><br>";
        echo "<button type='submit'>Simpan Perubahan</button>";
        echo "</form>";
    } else {
        echo "Mahasiswa tidak ditemukan.";
    }
    ?>
</body>
</html>
