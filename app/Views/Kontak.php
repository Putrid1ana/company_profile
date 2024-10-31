<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthy Milk-Kontak</title>

  <!-- Meta Tags -->
  <meta name="title" content="Healthy Milk-Kontak">
  <meta name="description" content="Hubungi Healthy Milk untuk informasi lebih lanjut tentang produk susu sehat dan berkualitas. Temukan cara mudah untuk menjaga kesehatan dengan susu pilihan terbaik.">

  <!-- Canonical Tag -->
  <link rel="canonical" href="<?= current_url() ?>">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Banner Section */
    .banner {
      width: 100%;
      height: auto;
      background: #0E1A18;
      position: relative;
    }

    .banner img {
      width: 100%;
      height: auto;
    }

    .banner-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(14, 26, 24, 0.50);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .banner-title {
      color: white;
      font-size: 48px;
      font-family: Inter, sans-serif;
      font-weight: 700;
      text-align: center;
    }

    /* Section Title */
    .section-title {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 40px;
    }

    .section-title h1 {
      color: #384F4B;
      font-size: 32px;
      font-family: Inter, sans-serif;
      font-weight: 700;
      margin: 0 15px;
    }

    /* Content Wrapper */
    .content-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      max-width: 1200px;
      margin: 20px auto 20px;
    }

    .content-left {
      flex: 1;
      margin-right: 20px;
    }

    .contact-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .contact-box h3 {
      margin-top: 0;
      margin-bottom: 15px;
    }

    .contact-box p {
      margin: 5px 0;
      color: #666;
    }

    .contact-box button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 15px;
      font-size: 16px;
    }

    .contact-box button:hover {
      background-color: #45a049;
    }

    .maps-container {
      flex: 1;
      height: 400px;
      margin-left: 20px;
    }

    /* Media Queries */
    @media (max-width: 768px) {
  
      .content-wrapper {
        flex-direction: column;
      }

      .content-left {
        margin-right: 0;
        margin-bottom: 20px;
      }

      .maps-container {
        margin-left: 0;
        height: 300px;
      }

      /* Banner */
      .banner-title {
        font-size: 24px;
      }
    }
  </style>
</head>

<body style="margin: 0px;">
  <!-- Background Section -->
  <div style="width: 100%; height: 100vh; position: relative;">

    <!-- Banner Section -->
    <div class="banner">
      <img src="/contact/kontak.jpg" alt="Background Image">
      <div class="banner-overlay">
        <h1 class="banner-title">Kontak Healthy Milk</h1>
      </div>
    </div>

    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="logo" id="logo">Healthy Milk</div>
      <ul class="nav-links">
        <li><a href="/" class="nav-item" data-id="home">Beranda</a></li>
        <li><a href="/tentang" class="nav-item" data-id="about">Tentang</a></li>
        <li><a href="/artikel" class="nav-item" data-id="articles">Artikel</a></li>
        <li><a href="/produk" class="nav-item" data-id="products">Produk</a></li>
        <li><a href="/aktivitas" class="nav-item" data-id="activities">Aktivitas</a></li>
        <li><a href="/kontak" class="nav-item" data-id="contact">Kontak</a></li>
        <li>
          <select id="language-select" style="padding: 5px; font-family: Inika; font-size: 16px; margin-right: 28px;">
            <option value="" hidden>Bahasa</option>
            <option value="id">Indonesia</option>
            <option value="en">English</option>
          </select>
        </li>
      </ul>
      <div class="hamburger">
        <i class="fas fa-bars"></i>
      </div>
    </nav>

    <!-- Script to toggle dropdown menu -->
    <script>
      const hamburger = document.querySelector('.hamburger');
      const navLinks = document.querySelector('.nav-links');

      hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
        const icon = hamburger.querySelector('i');

        if (navLinks.classList.contains('open')) {
          icon.classList.replace('fa-bars', 'fa-times');
        } else {
          icon.classList.replace('fa-times', 'fa-bars');
        }
      });
    </script>

    <!-- Content Wrapper Section -->
    <div class="content-wrapper">
      <div class="content-left">
        <!-- Contact Box -->
        <div class="contact-box">
          <h3>Kontak Kami</h3>
          <p><strong>Alamat:</strong> Jl. Jaya Milk No. 123, Batu, Jawa Timur</p>
          <p><strong>Email:</strong> contact@healthymilk.co.id</p>
          <p><strong>Telepon:</strong> +62 812-3456-7890</p>
          <button>Hubungi Kami</button>
        </div>
      </div>

      <!-- Google Maps Section -->
      <div class="maps-container">
        <!-- Embed Google Maps Iframe -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15807.976362496498!2d112.5356125871582!3d-7.8956849999999905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788110b42bc893%3A0x2f2bf5c3f2b4eedd!2sPabrik%20Pengolahan%20Susu%20Sapi%20Kud%20%22Batu%22!5e0!3m2!1sid!2sid!4v1728281642160!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <?php include 'Partials/footer.php'; ?>

</body>

</html>