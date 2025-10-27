<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa yang Sudah Mendaftar | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Siswa yang sudah mendaftar</h4>
                <a href="form-daftar.php" class="btn btn-primary btn-sm">Tambah Baru</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM siswa";
                            $query = mysqli_query($db, $sql);
                            $no = 1; 
                            
                            while ($siswa = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . $siswa['nama'] . "</td>";
                                echo "<td>" . $siswa['alamat'] . "</td>";
                                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                                echo "<td>" . $siswa['agama'] . "</td>";
                                
                                echo "<td>";
                                echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn btn-warning btn-sm me-1'>Edit</a>";
                                echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah kamu yakin ingin menghapus data ini?')\">Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <p>Total: <?php echo mysqli_num_rows($query) ?></p>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">Kembali ke Menu Utama</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
