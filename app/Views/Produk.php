<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthy Milk-Produk</title>

  <!-- Meta Tags -->
  <meta name="title" content="Healthy Milk-Produk">
  <meta name="description" content="Healthy Milk menawarkan berbagai produk susu berkualitas tinggi yang mendukung gaya hidup sehat. Temukan pilihan susu terbaik untuk nutrisi harian Anda.">

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

    .product-container {
      flex-wrap: nowrap;
      /* Tetap satu baris di layar besar */
    }

    .product-item {
      width: 235px;
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

    /* Responsive Design for Mobile */
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
  <div style="width: 100%; height: 100vh; position: relative; background: conic-gradient(from 180deg at 0% 100%, #A6D4FF 307deg, #D4ECFD 360deg);">

    <!-- Banner Section -->
    <div class="banner">
      <img src="/product/produk3.jpg" alt="Background Image">
      <div class="banner-overlay">
        <h1 class="banner-title">Produk Healthy Milk</h1>
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

    <!-- Produk Section -->
    <div style="width: 100%; height: auto; padding: 40px 0; background: linear-gradient(234deg, #A6D4FF 0%, white 40%, rgba(178, 218, 255, 0.09) 96%); display: flex; flex-direction: column; align-items: center;">
      <div style="text-align: center; margin-bottom: 150px;">
        <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
          <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
          <div style="font-size: 32px; font-weight: 700; color: #384F4B;">Produk</div>
          <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
        </div>
      </div>

      <div class="product-container" style="width: 100%; display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
        <?php foreach ($produks as $produk): ?>
          <div class="product-item" style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
            <img src="<?= base_url('product/grefields.jpg.png') ?>" alt="susu greenfields" style="width: 100%; border-radius: 20px;">
            <a href="<?= base_url('produk/' . esc($produk['id_produk'])); ?>" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">
              <?= esc($produk['nama_produk_in']); ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    
      <!-- <div class="product-container" style="width: 100%; display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
        <div class="product-item" style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
          <img src="/product/grefields.jpg.png" alt="susu greenfields" style="width: 100%; border-radius: 20px;">
          <a href="produk/greenfields" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">Greenfields</a>
        </div>
        
        <div class="product-item" style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
          <img src="/product/icithan.jpg.png" alt="susu icithan" style="width: 100%; border-radius: 20px;">
          <a href="produk/icithan" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">Icithan</a>
        </div>
        <div class="product-item" style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
          <img src="/product/silk.jpg.png" alt="susu silk" style="width: 100%; border-radius: 20px;">
          <a href="produk/silk" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">Silk Milk</a>
        </div>
        <div class="product-item" style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
          <img src="/product/ultramilk1.jpg.png" alt="susu ultramilk" style="width: 100%; border-radius: 20px;">
          <a href="produk/ultramilk" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">Ultramilk</a>
        </div>
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