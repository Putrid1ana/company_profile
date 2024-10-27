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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #FFFF;
      padding: 15px 20px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
      font-size: 30px;
      font-family: Roboto;
      font-weight: 700;
      color: black;
    }

    .nav-links {
      display: flex;
      list-style: none;
      align-items: center;
    }

    .nav-links li {
      margin-left: 20px;
    }

    .nav-links a {
      text-decoration: none;
      color: black;
      font-size: 16px;
      font-family: Poppins;
    }

    .nav-links a:hover {
      color: #ddd;
    }

    .hamburger {
      display: none;
      cursor: pointer;
      font-size: 24px;
      z-index: 1000;
      color: black;
      position: absolute;
      /* Pastikan posisinya ditetapkan secara absolut */
      right: 50px;
      /* Geser ke kanan */
      top: 20px;
      /* Geser ke bawah agar tidak terlalu ke atas */
      padding: -20px;
      /* Tambahkan padding agar lebih mudah di-klik */
    }

    .hamburger i {
      font-size: 24px;
      color: black;
      z-index: 1000;
      /* Pastikan ikon berada di depan elemen lainnya */
    }

    .hamburger {
      display: none;
      cursor: pointer;
      font-size: 24px;
      z-index: 1000;
      color: black;
      position: absolute;
      right: 50px;
      top: 15px;
      padding: 0;
    }

    .hamburger i {
      font-size: 24px;
      color: black;
      z-index: 1000;
    }

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

     /* Footer */
     .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: black;
      padding: 20px;
      box-sizing: border-box;
      border-top: 1px solid rgba(255, 255, 255, 0.17);
      position: relative;
      bottom: 0;
      color: white;
    }

    .footer-icons {
      display: flex;
      gap: 15px;
    }

    .footer-icons div {
      width: 32px;
      height: 32px;
      background: rgba(255, 255, 255, 0.17);
      border-radius: 16px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .footer-icons a {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 20px;
      height: 20px;
      color: white;
      text-decoration: none;
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
      .logo {
        font-size: 20px;
      }

      /* Navbar */
      .nav-links {
        position: absolute;
        right: 0;
        top: 0;
        background-color: #FFFF;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 350px;
        clip-path: circle(0px at 100% 0%);
        transition: clip-path 0.5s ease-in-out;
        padding-top: 50px;
        z-index: 1000;
      }

      .nav-links.open {
        clip-path: circle(100% at 50% 50%);
      }

      .nav-links li {
        margin: 10px 0;
      }

      .hamburger {
        display: block;

      }

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

      /* Footer */
      .footer {
        padding: 10px;
      }

      .footer-icons div {
        width: 24px;
        height: 24px;
      }

      .footer-icons a {
        width: 16px;
        height: 16px;
      }

      .footer {
        font-size: 12px;
        /* Further reduce font size for copyright */
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
      <div class="logo">Healthy Milk</div>
      <ul class="nav-links">
        <li><a href="/">Beranda</a></li>
        <li><a href="/tentang">Tentang</a></li>
        <li><a href="/artikel">Artikel</a></li>
        <li><a href="/produk">Produk</a></li>
        <li><a href="/aktivitas">Aktivitas</a></li>
        <li><a href="/kontak">Kontak</a></li>
        <li>
          <select style="padding: 5px; font-family: Inika; font-size: 16px; margin-right: 28px;">
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

     <!-- Footer -->
     <div class="footer">
        <div class="footer-icons">
          <div>
            <a href="https://facebook.com" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
          <div>
            <a href="https://twitter.com" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
          <div>
            <a href="https://youtube.com" target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
          <div>
            <a href="https://instagram.com" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
        <div>Copyright 2024 Design by Healthy Milk</div>
      </div>

</body>

</html>