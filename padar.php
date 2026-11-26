<?php
// ini nanti bisa diisi logika PHP kalau perlu, misalnya session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Informasi lengkap tentang Pulau Komodo, destinasi wisata populer di Nusa Tenggara Timur, Indonesia." />
  <title>Pulau Padar- Destinasi Wisata</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .konten-wisata {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .konten-wisata img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .konten-wisata h1 {
      margin-bottom: 10px;
      font-size: 30px;
    }

    .konten-wisata p {
      font-size: 16px;
      line-height: 1.7;
      text-align: justify;
    }

    .tombol-kembali {
      display: inline-block;
      margin-top: 30px;
      padding: 10px 20px;
      background-color: #007BFF;
      color: white;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .tombol-kembali:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="konten-wisata">
    <h1>Pulau Padar</h1>
    <img src="https://indonesiajuara.asia/wp-content/uploads/2022/06/view-2-padar-1024x1024.jpg" alt="Pulau Padar" alt="Pulau Komodo" style="width: 50%;" />
    <p>
      Pulau Padar adalah salah satu permata tersembunyi di kawasan Taman Nasional Komodo, Nusa Tenggara Timur. Pulau ini terkenal karena lanskapnya yang dramatis: bukit-bukit terjal berwarna coklat keemasan, laut biru jernih, dan tiga teluk indah dengan pasir berwarna berbeda—putih, hitam, dan merah muda. Pemandangan ini menjadikan Pulau Padar sebagai spot favorit para fotografer dan pecinta alam dari seluruh dunia.
      Pulau ini termasuk dalam kawasan <em>Taman Nasional Komodo</em> yang telah diakui sebagai Situs Warisan Dunia oleh UNESCO. Aktivitas populer di sini antara lain trekking ke puncak bukit untuk melihat panorama pulau, snorkeling, diving, dan menjelajahi pulau-pulau sekitarnya dengan kapal.
    </p>
    <a href="index.php" class="tombol-kembali">← Kembali ke Galeri</a>
  </div>
</body>
</html>