<?php
// session_start(); // Kalau mau pakai login
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UAS Web Programming - Wonders of NTT</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<style>
  :root {
    --bs-body-font-family: 'Montserrat', sans-serif;
  }
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" data-aos="fade-down">
  <div class="container">
    <a class="navbar-brand" href="#home">
      <img src="ChatGPT Image Jul 21, 2025, 11_53_30 AM.png" alt="Logo" height="80">
    </a>

    <span class="ms-2">Explore NTT</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-info" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link text-info" href="#aboutntt">About NTT</a></li>
        <li class="nav-item"><a class="nav-link text-info" href="#culture">Culture</a></li>
         <li class="nav-item"><a class="nav-link text-info" href="#tourntt">Tour Ntt</a></li>
        <li class="nav-item"><a class="nav-link text-info" href="#blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link text-info" href="#more">More</a></li>
         <li class="nav-item"><a class="nav-link text-info" href="#logout">Logout</a></li>
         </ul>
    </div>
  </div>
</nav>


<header id="home" class="position-relative">
  <div class="overlay position-absolute w-100 h-100 bg-dark opacity-50"></div>
  <video autoplay muted loop class="w-100" style="max-height: 600px; object-fit: cover;">
    <source src="snaptik_7499039296293178632.mp4" type="video/mp4" />
  </video>
  <div class="position-absolute top-50 start-50 translate-middle text-center text-white" data-aos="zoom-in" data-aos-duration="1500">
    <h3>Wonders Of NTT</h3>
    <p>Discover the breathtaking nature and culture of East Nusa Tenggara</p>
    <a href="#aboutntt" class="btn btn-warning">Discover More</a>
  </div>
</header>

<section id="aboutntt" class="py-5 container" data-aos="fade-up">
<h3 class="text-center mb-3 fw-bold">About NTT</h3>
  <p class="text-center text-muted mb-4">
    Dari sabana hingga laut biru, setiap sudut NTT menyimpan kisah yang menunggu untuk dijelajahi.
  </p>
  <p>
    Nusa Tenggara Timur (NTT) adalah provinsi di Indonesia yang terkenal dengan pesona alam eksotis dan budaya yang kaya.
    Terdiri dari pulau-pulau menakjubkan seperti Flores, Sumba, dan Timor, NTT menyimpan keindahan alam seperti Danau Kelimutu yang berwarna-warni, Pulau Komodo yang menjadi rumah bagi hewan purba komodo, hingga pantai-pantai berpasir merah muda yang Instagramable.
    Selain itu, kehidupan adat di desa tradisional seperti Wae Rebo dan kampung-kampung di Sumba memperkaya pengalaman budaya yang otentik.
  </p>
  <p>
    NTT bukan hanya destinasi wisata, tapi juga petualangan yang menyentuh hati dan mata.
    Dengan keramahan masyarakat lokal dan keindahan alamnya yang memukau, NTT menjadi salah satu surga tersembunyi di Indonesia yang wajib dikunjungi.
  </p>
</section>

<section id="culture" class="py-5 container-fluid bg-light">
  <div class="container">
    <h3 class="text-center mb-4 fw-bold" data-aos="fade-up">Culture of NTT</h3>
    <div class="row justify-content-center">

    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card h-100 shadow-sm">
        <img src="https://indonesiajuara.asia/wp-content/uploads/2022/11/Baju-Adat-Sumba-Timur.webp" />
         
        <div class="card-body">
         <h4 class="text-center mb-3 fw-bold fs-6">Pakaian Adat Sumba</h4>
          <p class="card-text">Pakaian adat Sumba, yang dikenal dengan nama Hinggi untuk pria dan Lau untuk wanita, merupakan bagian penting dari budaya Sumba, Nusa Tenggara Timur. 
              Pakaian ini tidak hanya digunakan dalam upacara adat, tetapi juga dalam kehidupan sehari-hari.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card h-100 shadow-sm">
        <img src="https://ekorantt.com/wp-content/uploads/2021/04/WhatsApp-Image-2021-04-25-at-19.24.30.jpeg" class="card-img-top img-fluid" alt="Tenun Ikat Ende">
        <div class="card-body">
          <h5 class="text-center mb-3 fw-bold fs-6">Tenun Ikat Ende</h5>
          <p class="card-text">Tenun ikat Ende adalah kain tenun tradisional yang berasal dari Kabupaten Ende, Nusa Tenggara Timur. Kain ini memiliki ciri khas motif yang kaya makna dan nilai budaya, 
              serta proses pembuatannya yang masih menggunakan cara tradisional. 
              Tenun ikat Ende-Lio, khususnya, dikenal dengan motif-motif yang terinspirasi dari alam dan digunakan dalam berbagai upacara adat serta kehidupan sehari-hari masyarakat Ende. 
            </p>
        </div>
      </div>
    </div>

   <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
  <div class="card h-100">
    <audio class="card-img-top" controls style="width: 100%; height: 50px;">
      <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
      Browser Anda tidak mendukung audio.
    </audio>
    <div class="card-body">
    <h6 class="text-center mb-3 fw-bold fs-6">Lagu Trandsional</h6>
      <p class="card-text">
        Lagu Bolelebo adalah lagu daerah dari Nusa Tenggara Timur (NTT), tepatnya berasal dari Pulau Rote. 
        Lagu ini bercerita tentang kebanggaan dan kerinduan terhadap kampung halaman, khususnya Pulau Rote atau Tanah Timor. 
        Meskipun liriknya sederhana, lagu ini memiliki makna mendalam bagi masyarakat NTT, yang merindukan kampung halaman mereka di mana pun mereka berada.
      </p>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
  <div class="card h-100">
    <video class="card-img-top" style="height: 250px; object-fit: cover;" controls>
      <source src="snaptik_7512414626835975441_hd.mp4" type="video/mp4">
      Browser Anda tidak mendukung video.
    </video>
    <div class="card-body">
     <h3 class="text-center mb-3 fw-bold fs-6">Tari Caci</h3>

      <p class="card-text">
        Tari Caci adalah tarian perang sekaligus permainan rakyat yang berasal dari Manggarai, Flores, Nusa Tenggara Timur. 
        Tarian ini melibatkan dua penari laki-laki yang saling berhadapan, menggunakan cambuk (larik) dan perisai (nggiling) untuk bertarung. 
        Tari Caci biasanya ditampilkan dalam berbagai upacara adat, syukuran, atau perayaan panen, dan juga sebagai penyambutan tamu penting.
      </p>
    </div>
  </div>
</div>

    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
      <div class="card h-100">
        <img src="https://akcdn.detik.net.id/community/media/visual/2022/12/06/alat-musik-sasando_169.jpeg?w=620" class="card-img-top img-fluid" alt="Sasando">
        <div class="card-body">
        <h3 class="text-center mb-3 fw-bold fs-6">Sasando</h3>
          <p class="card-text">
            Sasando adalah alat musik tradisional berdawa dari Pulau Rote, Nusa Tenggara Timur (NTT). Alat musik ini dimainkan dengan cara dipetik dan memiliki suara yang khas. 
              Sasando terbuat dari bambu sebagai badan utama, dawai (senar),
              dan wadah berbentuk kipas dari daun lontar yang berfungsi sebagai resonatootif yang terinspirasi dari alam dan digunakan dalam berbagai upacara adat serta kehidupan sehari-hari masyarakat Ende.
        </div>
      </div>
    </div>

    
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
      <div class="card h-100 shadow-sm">
        <img src="https://student-activity.binus.ac.id/himars/wp-content/uploads/sites/3/2021/07/aaa.jpg" />

        <div class="card-body">
         <h3 class="text-center mb-3 fw-bold fs-6">Rumah Adat Mbaru Niang</h3>
          <p class="card-text">Rumah Mbaru Niang seringkali muncul di berbagai platforms sosial media. 
              Surga di atas awan ini berlokasi di Kampung Adat Wae Rebo, Flores. Meski terpencil di atas pegunungan, tetapi tetap menjadi favorit banyak orang untuk dikunjungi.
              Mereka berbondong-bondong datang untuk melihat rumah adat di NTT yang masih terjaga nilai khasnya ini.</p>
    </div>
</div>
  </div>
  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="700">
  <div class="card h-100">
    <video class="snaptik_7466330180257123592.mp4ard-img-topc" style="height: 250px; object-fit: cover;" controls>
      <source src="snaptik_7466330180257123592.mp4" type="video/mp4">
      Browser Anda tidak mendukung video.
    </video>
    <div class="card-body">
   <h3 class="text-center mb-3 fw-bold fs-6">Upacara Adat Pasola</h3>
      <p class="card-text">
        Pasola adalah upacara adat yang berasal dari Sumba, Nusa Tenggara Timur (NTT), yang melibatkan pertempuran ketangkasan antara dua kelompok pria berkuda yang saling melempar lembing kayu (sola atau hola).
         Tradisi ini merupakan bagian dari kepercayaan Marapu dan bertujuan untuk memohon keberkahan, keselamatan, dan hasil panen yang melimpah. 
            </p>
      </p>
    </div>
  </div>
</div>
</div>

<section id="destination" class="mb-5 container">
  <div class="container bg-light" data-aos="fade-up">
  <h3 class="text-center mb-4 fw-bold">Destinasi Wisata di NTT</h3>
<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-8" data-aos="fade-up">
      <div class="card h-100 shadow">
        <img src="https://asset.kompas.com/crops/vdZhnhd65omILwbPWGk6C_Vdsp0=/0x0:780x520/1200x800/data/photo/2019/09/26/5d8c64544d656.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fw-bold">Pulau Komodo</h5>
          <p>Pulau eksotis habitat asli komodo.</p>
          <a href="komodo.php" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    </div>

<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-8" data-aos="fade-up">
      <div class="card h-100 shadow">
        <img src="https://www.asiaglobalyachting.com/wp-content/uploads/2025/04/pink-beach-komodo-island.webp" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fw-bold">Pink Beach</h5>
          <p>Pantai tenang dengan pemandangan indah.</p>
          <a href="pink beach.php" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    </div>
  
  <div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-8" data-aos="fade-up">
      <div class="card h-100 shadow">
        <img src="https://indonesiajuara.asia/wp-content/uploads/2022/06/view-2-padar-1024x1024.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fw-bold">Pulau Padar</h5>
          <p>Spot foto ikonik dengan tiga teluk cantik.</p>
          <a href="padar.php" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    </div>
  
 <div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-8" data-aos="fade-up">
      <div class="card h-100 shadow">
        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p3/93/2024/07/28/danau-kelimutu-flores-unik-1-3575520738.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fw-bold"> Danau Kelimutu</h5>
          <p>Tiga danaun,tiga warna ,satu keajaiban.</p>
          <a href="kelimutu.php" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    </div>
  
<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-8" data-aos="fade-up">
      <div class="card h-100 shadow">
        <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcR5L3W2SpwZuYWA9xT6l7kwyiRrhSLmdB4S26-ORruDLp71eZ90j6KYrijIFfSCoMaXHRtkIzDJNEBw8TZYBqvXoH-OeVTW5vmi0QD6dQ" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fw-bold">Labuan Bajo</h5>
          <p>Surga tropis diujung flores.</p>
          <a href="bajo.php" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    </div>

   <div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-8" data-aos="fade-up">
      <div class="card h-100 shadow">
        <img src="https://indahnesia.net/wp-content/uploads/2023/08/5-Hidden-Gem-Bajawa-2.webp" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fw-bold">Lembah Bejawa</h5>
          <p>Pesona alam dan budaya flores.</p>
          <a href="bejawa.php" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    </div>
  
  
   <div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-8" data-aos="fade-up">
      <div class="card h-100 shadow">
        <img src="https://pandooin-com.s3.ap-southeast-1.amazonaws.com/blog/article/images/sTpUdzRadqTBPvUDIERkNcN4hHLkYV0xOoj8C3K2.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fw-bold">Desa Wae Rebo</h5>
          <p>Desa di atas awan.</p>
          <a href="pink beach.php" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    </div>
</section>

<section id="tourntt" class="py-5" data-aos="fade-up"> 
  <div class="container"> <h3 class="text-center mb-4 fw-bold">Jelajah Pesona NTT</h3>
    <p class="text-center mb-4">Nikmati perjalanan tak terlupakan ke destinasi eksotis di Nusa Tenggara Timur bersama paket tour pilihan kami.</p>
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle">
        <thead class="table-info">          
          <tr>
            <th>Nama Tour</th>
            <th>Destinasi Unggulan</th>
            <th>Durasi</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>NTT Classic Tour</td>
          <td>Labuan Bajo, Pulau Komodo, Pink Beach</td>
          <td>4 Hari 3 Malam</td>
          <td>Rp 5.200.000</td>
        </tr>
        <tr>
          <td>Kelimutu Sunrise Tour</td>
          <td>Ende, Moni, Danau Kelimutu</td>
          <td>2 Hari 1 Malam</td>
          <td>Rp 3.000.000</td>
        </tr>
        <tr>
          <td>Cultural Heritage Tour</td>
          <td>Wae Rebo, Ruteng, Lembah Todo</td>
          <td>3 Hari 2 Malam</td>
          <td>Rp 4.000.000</td>
        </tr>
        <tr>
          <td>NTT Island Hopping</td>
          <td>Pulau Padar, Pulau Kelor, Taka Makassar</td>
          <td>2 Hari 1 Malam</td>
          <td>Rp .2.700.000</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<section id="blog" class="py-5 container" data-aos="fade-up">
  <h3 class="text-center mb-4 fw-bold">Blog & Tips Wisata NTT</h3>
  
  <div class="row g-4 justify-content-center">

    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <article class="p-3 bg-white shadow rounded h-100">
        <h5 class="text-warning">Tips Liburan ke NTT untuk Pemula</h5>
        <p>Pertama kali berkunjung ke Nusa Tenggara Timur? Persiapkan fisik karena banyak jalur tracking seperti ke Wae Rebo atau Danau Kelimutu. Jangan lupa bawa sunblock, topi, dan kamera! Kunjungi saat musim kemarau (April–Oktober) untuk cuaca cerah.</p>
        <a href="artikel 1.php" class="text-primary">Baca Selengkapnya</a>
      </article>
    </div>

    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
      <article class="p-3 bg-white shadow rounded h-100">
          <h5 class="text-warning">5 Spot Foto Instagramable di Labuan Bajo</h5>
          <p>Labuan Bajo penuh dengan lokasi cantik untuk foto. Coba ke Bukit Cinta saat matahari terbit, atau Pulau Padar dengan lekukan bukitnya yang ikonik. Jangan lupa Pink Beach yang unik dan dermaga kayu eksotis di Kampung Ujung!</p>
          <a href="artikel2.php" class="text-primary">Baca Selengkapnya</a>
      </article>
    </div>

    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
      <article class="p-3 bg-white shadow rounded h-100">
          <h5 class="text-warning">Kenapa Harus Liburan ke NTT Sekarang?</h5>
          <p>NTT menyimpan keindahan alam dan budaya yang masih alami. Dari Pulau Komodo, Pink Beach, hingga desa adat Wae Rebo—semua menyuguhkan pengalaman yang tidak terlupakan. Belum banyak dikunjungi, NTT adalah surga tersembunyi Indonesia!</p>
          <a href="artikel 3.php" class="text-primary">Baca Selengkapnya</a>
      </article>
    </div>

  </div>
</section>

<footer id="more" class="bg-secondary text-white py-5" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5>Site Map</h5>
        <p> Berikut ini adalah lokasi wisata utama di Provinsi Nusa Tenggara Timur (NTT):</p>
      </div>
      <div class="col-md-3">
        <h5>Hubungi Kami</h5>
      <p>Email: info@explorentt.com</p>
    <p>WhatsApp: +62 812-XXXX-XXXX</p>
    <p>Instagram: @explore.ntt</p>
      </div>
      <div class="col-md-3">
        <h5>Panduan</h5>
        <p>Dapatkan panduan lengkap tentang cara menuju lokasi wisata, pilihan transportasi lokal, dan rekomendasi penginapan terbaik.Melalui email: info@explorentt.com</p>
      </div>
      <div class="col-md-3">
        <h5>Tentang Website Ini</h5>
        <p>Website ini dibuat untuk mengenalkan kekayaan budaya, alam, dan keindahan NTT kepada masyarakat luas.
    </div></p>
      </div>
    </div>
    <div class="mt-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.973968697745!2d119.8711533!3d-8.4963961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db468a6d47ed641%3A0x87f524333c6a6e8d!2sLabuan%20Bajo!5e0!3m2!1sid!2sid!4v1721807255443!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen></iframe>
    </div>
    <div class="mt-4">
      <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h5>Tanya-tanya dulu yuk!</h5>
      <form id="contactForm" class="bg-white p-4 rounded text-dark">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" id="nama" name="nama" class="form-control form-control-sm" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" name="email" class="form-control form-control-sm" required>
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea id="pesan" name="pesan" rows="4" class="form-control form-control-sm"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
      </form>
    </div>
  </div>
    </div>
    <div class="text-center mt-4">© 2025 Wisata Indonesia - Marsella Wati - Sistem Informasi</div>
  </div>
</footer>

<section id="logout" class="btn btn-danger" href="logout.php">...</section>

<a class="nav-link btn btn-outline-danger" href="confirm_logout.php">
        <i class="fas fa-sign-out-alt"></i> Logout
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
      duration: 1000,
      once: true
  });
</script> 

<script>
document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();
  let nama = document.getElementById("nama").value.trim();
  let email = document.getElementById("email").value.trim();
  if (nama === "" || email === "") {
    alert("Nama dan email wajib diisi!");
    return;
  }
  if (confirm("Kirim pesan ini?")) {
    alert("Pesan berhasil dikirim! Terima kasih sudah menghubungi kami.");
    this.reset();
  }

  
});
</script>


</body>
</html>