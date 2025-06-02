<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama_kegiatan = mysqli_real_escape_string($koneksi, $_POST['nama_kegiatan']);
    $waktu_kegiatan = mysqli_real_escape_string($koneksi, $_POST['waktu_kegiatan']);
    
    // Cek apakah id sudah ada
    $cek = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id = '$id'");
    if (mysqli_num_rows($cek) > 0) {
        header("Location: index.php?status=gagal&pesan=id sudah terdaftar");
        exit();
    }
    
    // Query tambah data
    $query = "INSERT INTO tb_mahasiswa (id, nama_kegiatan, waktu_kegiatan) VALUES ('$id', '$nama_kegiatan', '$waktu_kegiatan')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Kegiatan</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 10px; }
        button { padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; }
        a { display: inline-block; margin-top: 15px; text-decoration: none; color: #555; }
    </style>
</head>
<body>
<h3>Tambah Data Mahasiswa</h3>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>id</label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>nama_kegiatan:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>waktu_kegiatan:</label>
            <textarea name="waktu_kegiatan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>