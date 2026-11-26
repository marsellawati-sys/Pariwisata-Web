<?php
// ini nanti bisa diisi logika PHP kalau perlu, misalnya session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Welcome - Wonders of NTT</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;600&display=swap');

    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #007bff, #00c6ff);
      color: white;
    }

    .welcome-container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
    }

    .welcome-content {
      background-color: rgba(0, 0, 0, 0.35);
      padding: 50px 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    h1 {
      font-family: 'Pacifico', cursive;
      font-size: 50px;
      margin-bottom: 15px;
      color: #ffeb3b;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.4);
    }

    p {
      font-size: 20px;
      margin-bottom: 30px;
      font-weight: 300;
    }

    .enter-button {
      background-color: #ff9800;
      color: white;
      padding: 12px 30px;
      font-size: 18px;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .enter-button:hover {
      background-color: #e67e00;
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <div class="welcome-content">
      <h1>Welcome to Wonders of NTT</h1>
      <p>Explore the amazing nature and culture of East Nusa Tenggara</p>
      <a href="index.php" class="enter-button">Discover More</a>
    </div>
  </div>
</body>
</html>
