<?php
    include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tampil Pegawai</title>
</head>
<body>
    <h1>Tampil Pegawai</h1>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telepon</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "dbreg.php";
                $qry_pegawai = mysqli_query($conn,"select * from pegawai join jabatan on jabatan.id_jabatan = pegawai.id_jabatan");
                $no = 0;
                while($data_pegawai = mysqli_fetch_array($qry_pegawai)){
                    $no++;?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_pegawai['nik']?></td>
                        <td><?=$data_pegawai['nama']?></td>
                        <td><?=$data_pegawai['alamat']?></td>
                        <td><?=$data_pegawai['jk']?></td>
                        <td><?=$data_pegawai['telp']?></td>
                        <td><?=$data_pegawai['nama_jabatan']?></td>
                        <td><a href="ubah_pegawai.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                    </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    <a href="register.php" class="btn btn-success">Tambah pegawai</a>
    <?php 
    include "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>