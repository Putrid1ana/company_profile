<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthy Milk - Artikel</title>

  <!-- Meta Tags -->
  <meta name="title" content="Healthy Milk - Artikel">
  <meta name="description" content="Baca artikel menarik seputar susu sehat, manfaatnya, dan tips gaya hidup sehat di Healthy Milk. Temukan informasi yang berguna untuk hidup lebih sehat dan bugar.">

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
      <h1 class="banner-title">Artikel Healthy Milk</h1>
    </div>
  </div>

  <div style="width:100%; align-self: stretch; height: 561px; padding-top: 60px; padding-bottom: 60px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
    <div style="height: 98.39px; padding-bottom: 60px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
      <div style="align-self: stretch; height: 38.39px; padding-bottom: 1.39px; justify-content: flex-start; align-items: center; gap: 15px; display: inline-flex">
        <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
        <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter; font-weight: 700; line-height: 38.40px; word-wrap: break-word">Artikel</div>
        <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
      </div>
    </div>
    <div style="width: 1120px; height: 397px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
      <div style="align-self: stretch; justify-content: center; align-items: flex-start; display: flex; gap: 10px;">
        <!-- Kotak Artikel -->
        <div style="width: 320px; height: 275px; padding-top: 24px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
          <a href="<?= base_url('artikel/minum-susu-sehat-itu-penting') ?>" style=" text-decoration: none; color: inherit;">
            <div style="width: 100%; height: 251px; padding: 12px; justify-content: flex-start; align-items: flex-start; display: flex">
              <div style="width: 100%; padding: 30px; background: linear-gradient(180deg, #D5EBFF 0%, white 66%); box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                <img style="width: 160.75px; height: 80px" alt="meminum susu" src="<?= base_url('articel/artikel1.jpg.png') ?>" />
                <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Mengapa Minum Susu Penting Untuk Kesehatan</div>
                <div style="color: #444444; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Susu juga dapat dijadikan salah satu cara untuk memperoleh hidup sehat....<br />24 Agustus 2024</div>
              </div>
            </div>
          </a>
        </div>

        <div style="width: 320px; height: 275px; padding-top: 24px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
          <a href="<?= base_url('artikel/susu-minuman-sehat-kaya-manfaat-dan-berkah-namun-kurang-peminat') ?>" style=" text-decoration: none; color: inherit;">
            <div style="width: 100%; height: 251px; padding: 12px; justify-content: flex-start; align-items: flex-start; display: flex">
              <div style="width: 100%; padding: 30px; background: linear-gradient(180deg, #D5EBFF 0%, white 66%); box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                <img style="width: 160.75px; height: 80px" alt="meminum susu" src="<?= base_url('articel/artikel2.jpg.png') ?>" />
                <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Susu Minuman Sehat Kaya Manfaat dan Berkah</div>
                <div style="color: #444444; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Apabila kita kaitkan dengan ilmu gizi saat ini istilah tersebut sangat sesuai....<br />24 Juni 2024</div>
              </div>
            </div>
          </a>
        </div>

        <div style="width: 320px; height: 275px; padding-top: 24px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
          <a href="<?= base_url('artikel/inilah-manfaat-susu-murni-beserta-efek-sampingnya') ?>" style=" text-decoration: none; color: inherit;">
            <div style="width: 100%; height: 251px; padding: 12px; justify-content: flex-start; align-items: flex-start; display: flex">
              <div style="width: 100%; padding: 30px; background: linear-gradient(180deg, #D5EBFF 0%, white 66%); box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                <img style="width: 160.75px; height: 80px" alt="meminum susu" src="<?= base_url('articel/artikel3.jpg.png') ?>" />
                <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Inilah Manfaat Susu Murni Beserta Efeknya</div>
                <div style="color: #444444; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Manfaat susu murni dapat diperoleh karena susu ini mengandung nutrisi.....<br /> 31 Desember 2022</div>
              </div>
            </div>
          </a>
        </div>

        <div style="width: 320px; height: 275px; padding-top: 24px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
          <a href="<?= base_url('artikel/potensi-olahan-susu-sapi-perah-sebagai-bahan-pangan') ?>" style=" text-decoration: none; color: inherit;">
            <div style="width: 100%; height: 251px; padding: 12px; justify-content: flex-start; align-items: flex-start; display: flex">
              <div style="width: 100%; padding: 30px; background: linear-gradient(180deg, #D5EBFF 0%, white 66%); box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                <img style="width: 160.75px; height: 80px" alt="meminum susu" src="<?= base_url('articel/artikel4.jpg.png') ?>" />
                <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Potensi Olahan Susu Sapi sebagai Bahan Pangan</div>
                <div style="color: #444444; font-size: 9px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Susu sapi dan produk susu merupakan bahan makanan yang sangat bermanfaat...<br />8 Agustus 2023</div>
              </div>
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
      <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
        <a href="https://facebook.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>

      <!-- Icon Twitter -->
      <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
        <a href="https://twitter.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
          <i class="fab fa-twitter"></i>
        </a>
      </div>

      <!-- Icon YouTube -->
      <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
        <a href="https://youtube.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
          <i class="fab fa-youtube"></i>
        </a>
      </div>

      <!-- Icon Instagram -->
      <!-- Icon Instagram -->
      <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
        <a href="https://instagram.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
    <div style="color: white; font-size: 13px; font-family: DM Sans;">Copyright © 2024 Healthy Milk, Design by Healthy Milk</div>
  </div>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </div>
</body>

</html>