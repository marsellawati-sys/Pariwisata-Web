<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Web Wista Web Progrmming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: url('https://source.unsplash.com/1600x900/?beach,mountain,city,indonesia') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 10rem 0;
            position: relative;
            z-index: 1;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Website Wisata Nusa Tenggara Timur</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_register.php">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <!-- Foto 1 -->
      <div class="carousel-item active">
        <img src="https://indonesiajuara.asia/wp-content/uploads/2022/06/view-3-komodo-1024x1024.jpg" class="d-block w-100" alt="Foto 1">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-3">Jelajahi Keindahan Wisata Indonesia</h1>
          <p class="lead">Temukan tempat-tempat menakjubkan dan rencanakan petualangan Anda.</p>
          <a href="login.php" class="btn btn-primary btn-lg mt-3">Mulai Jelajahi</a>
        </div>
      </div>

      <!-- Foto 2 -->
      <div class="carousel-item">
        <img src="https://indonesiakaya.com/wp-content/uploads/2020/10/wae_rebo_1200.jpg" class="d-block w-100" alt="Foto 2">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-3">Jelajahi Keindahan Wisata Indonesia</h1>
          <p class="lead">Temukan tempat-tempat menakjubkan dan rencanakan petualangan Anda.</p>
          <a href="login.php" class="btn btn-primary btn-lg mt-3">Mulai Jelajahi</a>
        </div>
      </div>

      <!-- Foto 3 -->
      <div class="carousel-item">
        <img src="https://cdn.timesmedia.co.id/images/2022/01/19/danau-Kelimutu.jpg" class="d-block w-100" alt="Foto 3">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-3">Jelajahi Keindahan Wisata Indonesia</h1>
          <p class="lead">Temukan tempat-tempat menakjubkan dan rencanakan petualangan Anda.</p>
          <a href="login.php" class="btn btn-primary btn-lg mt-3">Mulai Jelajahi</a>
        </div>
      </div>
    </div>

    <!-- Tombol navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</header>

    <section class="container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <h3>Mudah Digunakan</h3>
                <p>Antarmuka yang sederhana membuat Anda mudah menemukan informasi yang Anda butuhkan.</p>
            </div>
            <div class="col-md-4">
                <h3>Informasi Lengkap</h3>
                <p>Dapatkan detail lengkap tentang lokasi, deskripsi, dan lainnya.</p>
            </div>
            <div class="col-md-4">
                <h3>Gratis</h3>
                <p>Website ini gratis untuk digunakan dan diakses oleh semua orang.</p>
            </div>
        </div>
    </section>
    
     <div class="text-center mt-4">© 2025 Wisata Indonesia - Marsella Wati - Sistem Informasi</div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>