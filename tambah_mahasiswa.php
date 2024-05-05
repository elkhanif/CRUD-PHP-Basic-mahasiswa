<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label>NIM:</label>
        <input type="text" name="nim" required><br>
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
