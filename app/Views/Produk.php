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
      /* Menjadikan navbar tetap */
      top: 0;
      /* Tetap di bagian atas halaman */
      left: 0;
      width: 100%;
      /* Memastikan navbar mengambil seluruh lebar layar */
      z-index: 100;
      /* Pastikan navbar berada di atas elemen lainnya */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      /* Memberikan bayangan untuk efek lebih jelas */
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
      width: 100%;
      height: 98px;
      background: black;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      box-sizing: border-box;
      border-top: 1px solid rgba(255, 255, 255, 0.17);
      position: relative;
      bottom: 0;
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {

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
        /* Pastikan ini lebih tinggi dari elemen lainnya */
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

      /* Hover effect for list items in mobile */
      .nav-links li:hover {
        background-color: #333;
        width: 100%;
        height: 20%;
        transition: background-color 0.3s ease-in-out;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .nav-links a:hover {
        color: black;
        transition: color 0.3s ease-in-out;
      }

      .navbar div {
        font-size: 24px;
      }

      .navbar div {
        font-size: 24px;
      }

      /* Banner */
      .banner-title {
        font-size: 32px;
      }

      /* Footer */
      .footer {
        flex-direction: column;
        height: auto;
        gap: 10px;
        padding: 10px;
        text-align: center;
      }
    }

    @media (max-width: 480px) {

      /* Reduce font sizes for very small screens */
      .hamburger {
        font-size: 20px;
        right: 10px;
        top: 15px;
      }

      .banner-title {
        font-size: 24px;
      }

      .section-title h1 {
        font-size: 24px;
      }
    }
  </style>
</head>

<body style="margin: 0px;">
  <!-- Background Section -->
  <div style="width: 100%; height: 100vh; position: relative; background: conic-gradient(from 180deg at 0% 100%, #A6D4FF 307deg, #D4ECFD 360deg);">

    <!-- Background Image Section -->
    <div style="width: 100%; height: 924px; background: #0E1A18; position: relative;">
      <img style="width: 100%; height: 924px; object-fit: cover;" src="/product/produk3.jpg" alt="Background Image">
      <div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: rgba(14, 26, 24, 0.5);"></div>
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
        <h1 style="font-size: 48px; font-weight: 700;">Produk Healthy Milk</h1>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dy10ycQbDBOCJQ9exOYtxlLRSAfRdBr0CdA+cTrp29s0BdTgf9p6A8hqK1NlQRWEidL2daFFXZHMx9WzVHQjAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Script to toggle dropdown menu -->
    <script>
      const hamburger = document.querySelector('.hamburger');
      const navLinks = document.querySelector('.nav-links');

      hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
        const icon = hamburger.querySelector('i');

        if (navLinks.classList.contains('open')) {
          icon.className = 'fas fa-times'; // Atur ikon menjadi "X"
        } else {
          icon.className = 'fas fa-bars'; // Kembalikan ke ikon "bars"
        }
      });
    </script>

    <!-- Produk Section -->
    <div style="width: 100%; height: 600px; padding: 40px 0; background: linear-gradient(234deg, #A6D4FF 0%, white 40%, rgba(178, 218, 255, 0.09) 96%); display: flex; flex-direction: column; align-items: center;">
      <div style="text-align: center; margin-bottom: 150px;">
        <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
          <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
          <div style="font-size: 32px; font-weight: 700; color: #384F4B;">Produk</div>
          <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
        </div>
      </div>
      <div style="width: 100%; display: flex; justify-content: center; gap: 30px;">
        <div style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
          <img src="/product/grefields.jpg.png" alt="susu greenfields" style="width: 100%; border-radius: 20px;">
          <a href="produk/greenfields" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">Greenfields</a>
        </div>
        <div style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
          <img src="/product/icithan.jpg.png" alt="susu icithan" style="width: 100%; border-radius: 20px;">
          <a href="produk/icithan" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">Icithan</a>
        </div>
        <div style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
          <img src="/product/silk.jpg.png" alt="susu silk" style="width: 100%; border-radius: 20px;">
          <a href="produk/silk" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">Silk Milk</a>
        </div>
        <div style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
          <img src="/product/ultramilk1.jpg.png" alt="susu ultramilk" style="width: 100%; border-radius: 20px;">
          <a href="produk/ultramilk" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">Ultramilk</a>
        </div>
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

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </div>
</body>

</html>