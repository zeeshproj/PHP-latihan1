
<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pegawai = $_POST['id_pegawai'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telp = $_POST['telp'];
    $id_jabatan = $_POST['id_jabatan'];

    if (empty($nama)) {
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } elseif (empty($email)) {
        echo "<script>alert('Email tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } else {
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE pegawai SET email = '".$email."', nik = '".$nik."', nama = '".$nama."', alamat = '".$alamat."', jk = '".$jk."', telp = '".$telp."', id_jabatan = '".$id_jabatan."' WHERE id_pegawai = '".$id_pegawai."'") or die(mysqli_error($conn));
        } else {
            $update = mysqli_query($conn, "UPDATE pegawai SET email = '".$email."', password = '".$password."', nik = '".$nik."', nama = '".$nama."', alamat = '".$alamat."', jk = '".$jk."', telp = '".$telp."', id_jabatan = '".$id_jabatan."' WHERE id_pegawai = '".$id_pegawai."'") or die(mysqli_error($conn));
        }

        if ($update) {
            echo "<script>alert('Sukses update pegawai');location.href='pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal update pegawai');location.href='pegawai.php?id_pegawai=".$id_pegawai."';</script>";
        }
    }
}
?>
