<?php
include("config.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama) VALUES ('$nama', '$alamat', '$jk', '$agama')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
    
} else {
    die("Akses dilarang...");
}
?>
