<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_jabatan = htmlspecialchars($_POST['nama_jabatan']);
    $gaji_pokok = htmlspecialchars($_POST['gaji_pokok']);
    $tunjangan = htmlspecialchars($_POST['tunjangan']);

    if (empty($nama_jabatan)) {
        echo "<script>alert('Nama jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } elseif (empty($gaji_pokok)) {
        echo "<script>alert('Gaji pokok tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } elseif (empty($tunjangan)) {
        echo "<script>alert('Tunjangan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } else {
        include "dbreg.php";

        // Pastikan Anda sudah mendefinisikan koneksi database di dbreg.php
        // $conn = new mysqli($servername, $username, $password, $dbname);

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Gunakan prepared statements untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO jabatan (nama_jabatan, gaji_pokok, tunjangan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama_jabatan, $gaji_pokok, $tunjangan);

        if ($stmt->execute()) {
            echo "<script>alert('Sukses menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        }

        // Tutup statement dan koneksi
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Formulir tidak dikirim dengan metode POST.";
}
?>
