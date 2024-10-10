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
    /* CSS Global Styles */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f8f8f8;
    }

    /* Navbar Styles */
    .navbar {
      width: 100%;
      max-width: 1440px;
      height: 75px;
      padding: 13px 184.49px;
      background: white;
      box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      z-index: 100;
    }

    .navbar-logo {
      font-size: 30px;
      font-weight: 700;
    }

    .navbar-link {
      text-decoration: none;
      color: black;
      font-size: 16px;
      margin-left: 20px;
    }

    /* Content Wrapper */
    .content-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      max-width: 1200px;
      margin: 100px auto 0;
      padding: 20px;
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

    /* Footer Styles */
    .footer {
      width: 100%;
      height: 98px;
      background: black;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.17);
    }

    .social-icon {
      width: 32px;
      height: 32px;
      background: rgba(255, 255, 255, 0.17);
      border-radius: 16px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: 10px;
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .navbar {
        padding: 10px 20px;
        flex-direction: column;
        gap: 10px;
      }

      .navbar-logo {
        font-size: 24px;
      }

      .navbar-link {
        font-size: 14px;
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
    }
  </style>
</head>

<body>
  <!-- Background Section -->
  <div style="width: 100%; height: 100vh; position: relative; background: conic-gradient(from 180deg at 0% 100%, #A6D4FF 307deg, #D4ECFD 360deg);">

    <!-- Background Image Section -->
    <div style="width: 100%; height: 924px; background: #0E1A18; position: relative;">
      <img style="width: 100%; height: 924px; object-fit: cover;" src="/contact/kontak.jpg" alt="Background Image">
      <div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: rgba(14, 26, 24, 0.5);"></div>
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
        <h1 style="font-size: 48px; font-weight: 700;">Kontak Healthy Milk</h1>
      </div>
    </div>

    <!-- Navbar Section -->
    <div class="navbar">
      <div style="font-size: 30px; font-family: Roboto; font-weight: 700;">Healthy Milk</div>
      <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
        <a href="/" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Beranda</a>
        <a href="/tentang" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Tentang</a>
        <a href="/artikel" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Artikel</a>
        <a href="/produk" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Produk</a>
        <a href="/aktivitas" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Aktivitas</a>
        <a href="/kontak" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Kontak</a>
        <div>
          <select style="padding: 5px; font-family: Inika; font-size: 16px;">
            <option value="" hidden>Bahasa</option>
            <option value="id">Indonesia</option>
            <option value="en">English</option>
          </select>
        </div>
      </div>
    </div>

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
    <div style="width: 100%; height: 98px; background: black; display: flex; justify-content: space-between; align-items: center; padding: 0 20px; box-sizing: border-box; border-top: 1px solid rgba(255, 255, 255, 0.17); position: relative; bottom: 0;">
      <div style="display: flex; gap: 15px;">
        <!-- Icon Facebook -->
        <a href="https://facebook.com" target="_blank" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
          <i class="fab fa-facebook-f" style="color: white;"></i>
        </a>

        <!-- Icon Twitter -->
        <a href="https://twitter.com" target="_blank" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
          <i class="fab fa-twitter" style="color: white;"></i>
        </a>

        <!-- Icon YouTube -->
        <a href="https://youtube.com" target="_blank" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
          <i class="fab fa-youtube" style="color: white;"></i>
        </a>

        <!-- Icon Instagram -->
        <a href="https://instagram.com" target="_blank" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
          <i class="fab fa-instagram" style="color: white;"></i>
        </a>
      </div>
      <div style="color: white; font-size: 13px; font-family: DM Sans;">Copyright © 2024 Healthy Milk, Design by Healthy Milk</div>
    </div>
    </div>
  </div>
</body>

</html>
