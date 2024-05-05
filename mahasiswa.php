<?php
include 'koneksi.php'; //call db

class Mahasiswa {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllMahasiswa() {
        $sql = "SELECT * FROM mahasiswa";
        $result = $this->conn->query($sql);
        $mahasiswas = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mahasiswa = array(
                    'nim' => $row['nim'],
                    'nama' => $row['nama'],
                    'jurusan' => $row['jurusan']
                );
                $mahasiswas[] = $mahasiswa;
            }
        }

        return $mahasiswas;
    }

    public function tambahMahasiswa($nim, $nama, $jurusan) {
        $sql = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";
        return $this->conn->query($sql);
    }

    public function updateMahasiswa($nim, $nama, $jurusan) {
        $sql = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan' WHERE nim='$nim'";
        return $this->conn->query($sql);
    }

    public function hapusMahasiswa($nim) {
        $sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
        return $this->conn->query($sql);
    }
}

$mahasiswa = new Mahasiswa($conn);
?>
