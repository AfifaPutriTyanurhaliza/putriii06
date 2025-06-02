<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PORTOFOLIO afifa</title>
  <link rel="stylesheet" href="style.css" />
</head>
<style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #0077b6; }
        tr:nth-child(even) { background-color: lightblue; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
    </head>
   <body>

   <header>
    <h1>Profil Saya</h1>
  </header>
  <nav>
    <ol>
        <li><a href="#BERANDA">BERANDA</a></li>
        <li><a href="#TENTANG SAYA">TENTANG SAYA</a></li>
        <li><a href="#PORTOFOLIO">PORTOFOLIO</a></li>
        <li><a href="#OPINI">OPINI</a></li>
        <li><a href="#CONTACT">CONTACT</a></li>
        <li class="dropdown">
          <a href="#">LAINYA</a>
          <ul class="dropdown-menu">
            <li><a href="https://www.instagram.com/ptr.tyn_18?igsh=ZXM5ZDZlNTFrenBn" target="_blank">instagram</a></li>
            <li><a href="https://www.tiktok.com/@afifa.ptri?_t=ZS-8w4JllMWbmD&_r=1" target="_blank">Tiktok</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100078016534102" target="_blank">Facebook</a></li>
          </ul>
        </li>
    </ol>    
  </nav>

    <div class="container">
      <section id="BERANDA" class="profile">
      <img src="foto ktm.jpg" alt="Foto Profil">
      <div>
        <h2>Saya AFIFA PUTRI TYAN NURHALIZA</h2>
        <p>Saya adalah Mahasiswa dari Universitas Nahdlatul Ulama Sunan Giri Bojonegoro,<br>
           Saya mengambil prodi Teknik Informatika, Fakultas Sains dan Teknologi</p>
      </div>
    </section>

    <section id="TENTANG SAYA" class="about">
        <img src="foto afifa.jpg" alt="foto saya">
      <h2>Tentang Saya</h2>
      <p>Saya berasal dari Simorejo Kepohbaru Bojonegoro, saya lahir diBojonegoro bertepatan pada tanggal<br>
         18 November 2006. Saya Alumni Pondok Pesantren Attanwir yang terletak didesa Talun kecamatan<br>
         Sumberrejo kabupaten Bojonegoro, saya menempuh 6 tahun pendidikan dipondok. Hoby saya Olahraga,<br>
         biasanya saya setiap pagi olahraga karena tubuh yang sehat mendukung pada pikiran yang kuat. Saya<br>
         memiliki impian yang besar menjadi seorang pengusaha yang berbisnis menggunakan teknologi informasi,<br>
        mampu menciptakan karya-karya tentang Teknologi digital yang bermanfaat bagi banyak orang.</p>
    </section>

    <section id="PORTOFOLIO" class="activities">
      <h2>Portofolio</h2>
      <h3>Tambah Data Kegiatan</h3>

    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>id</label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama_kegiatan:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Waktu_kegiatan:</label>
            <textarea name="waktu_kegiatan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <table>
       <tr>
            <th>id</th>
            <th>Nama_kegiatan</th>
            <th>Waktu_kegiatan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama_kegiatan']; ?></td>
            <td><?php echo $row['waktu_kegiatan']; ?></td>
            <td>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

    <section  id="OPINI" class="opini">
      <h2>Opini Saya</h2>
      <div><img src="foto it camp 2.jpg" alt="Opini 1"><h4>Teknik Informatika mengadakan IT Camp di TPG Balen</h4></div>
      <div><img src="foto it camp.jpg" alt="Opini 2"><h4>Menang juara 2 lomba bola dalam kotak secara kelompok</h4></div>
      <div><img src="foto puisi berantai.jpg" alt="Opini 3"><h4>puisi berantai dalam acara IT Camp/hiburan malam</h4></div>
      <div><img src="foto aef.jpg" alt="Opini 4"><h4>Sosialisasi Kampus di Attanwir</h4></div>
      <div><img src="foto ukm Tari.jpg" alt="Opini 5"><h4>Worshkop UKM tari</h4></div>
      <div><img src="foto seminar AI TALK.jpg" alt="Opini 6"><h4>Worshkop public speaking bersama kak Ossa</h4></div>
    </section>

    <section id="CONTACT" class="contact">
      <h3>Hubungi Saya</h3>
      <form>
        <input type="text" placeholder="Nama"><br>
        <input type="email" placeholder="Email"><br>
        <input type="text" placeholder="Subjek"><br>
        <textarea placeholder="Pesan Anda"></textarea><br>
        <button type="submit">Kirim</button>
      </form>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.37389205329!2d112.1147561!3d-7.198111399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7789a831646ad3%3A0xe65bc459a7769a36!2sBengkel%20Motor%20MDR%20Simorejo!5e0!3m2!1sid!2sid!4v1746237339560!5m2!1sid!2sid"></iframe>
    </section>

  </div>

  <footer>
    @AFIFA PUTRI 2025
  </footer>
</body>
</html>