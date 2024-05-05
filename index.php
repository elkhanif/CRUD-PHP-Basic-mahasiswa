<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah_mahasiswa.php">Tambah Mahasiswa</a>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php
        include 'mahasiswa.php';

        $mahasiswas = $mahasiswa->getAllMahasiswa();

        foreach ($mahasiswas as $mhs) {
            echo "<tr>";
            echo "<td>" . $mhs['nim'] . "</td>";
            echo "<td>" . $mhs['nama'] . "</td>";
            echo "<td>" . $mhs['jurusan'] . "</td>";
            echo "<td>
                    <a href='edit_mahasiswa.php?nim=" . $mhs['nim'] . "'>Edit</a>
                    <a href='hapus_mahasiswa.php?nim=" . $mhs['nim'] . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
