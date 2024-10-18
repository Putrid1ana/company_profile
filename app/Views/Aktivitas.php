<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthy Milk - Aktivitas</title>

   <!-- Meta Tags -->
   <meta name="title" content="Healthy Milk - Aktivitas">
   <meta name="description" content="Temukan berbagai aktivitas menarik dan edukatif seputar Healthy Milk. Kami berkomitmen untuk mendukung gaya hidup sehat melalui berbagai program dan kegiatan.">

  <!-- Canonical Tag -->
  <link rel="canonical" href="<?= current_url() ?>">

  <!-- Link untuk FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

  <!-- Banner Section -->
  <div class="banner">
    <img src="/articel/artikel.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Aktivitas Healthy Milk</h1>
    </div>
  </div>

    <!-- Main Content Section -->
    <div style=" width: 100%; align-self: stretch; height: 778px; padding-top: 60px; padding-bottom: 60px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style=" width:100%; height: 98.39px; padding-bottom: 60px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
        <div style="align-self: stretch; height: 38.39px; padding-bottom: 1.39px; padding-left: 500px; padding-right: 100px; justify-content: flex-start; align-items: center; gap: 15px; display: inline-flex">
          <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
          <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter; font-weight: 700; line-height: 38.40px; word-wrap: break-word">Aktivitas</div>
          <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
        </div>
      </div>
      <div style="height: 491.80px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
        <div style="align-self: stretch; justify-content: center; align-items: flex-start; display: inline-flex">
          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas/penyajian-milk') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 350px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 50px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 26.14px; padding-right: 26.14px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Penyajian Milk</div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 10px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 24.14px; padding-right: 24.16px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Eum ad dolor et. Autem aut fugiat debitis<br />voluptatem consequuntur sit. Et veritatis id.</div>
                  </div>
                </div>
                <img style="width: 310px; height: 220px; left: 12px; top: 36.46px; position: absolute" alt="menuang susu" src="/aktifitas/ultramilk.jpg.png" />
              </div>
            </a>
          </div>

          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas/pemindahan-milk') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 350px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 50px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 26.14px; padding-right: 26.14px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Pemindahan Milk</div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 10px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 24.14px; padding-right: 24.16px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Eum ad dolor et. Autem aut fugiat debitis<br />voluptatem consequuntur sit. Et veritatis id.</div>
                  </div>
                </div>
                <img style="width: 310px; height: 220px; left: 12px; top: 39.46px; position: absolute" alt="susu kacang" src="/aktifitas/aktivitas.jpg.png" />
              </div>
            </a>
          </div>

          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas/peternakan') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 350px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 50px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 26.14px; padding-right: 26.14px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Peternakan </div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 10px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 24.14px; padding-right: 24.16px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Eum ad dolor et. Autem aut fugiat debitis<br />voluptatem consequuntur sit. Et veritatis id.</div>
                  </div>
                </div>
                <img style="width: 310px; height: 220px; left: 12px; top: 39.46px; position: absolute" alt="susu sapi putih" src="/aktifitas/aktivitas2.jpg.png" />
              </div>
            </a>
          </div>

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