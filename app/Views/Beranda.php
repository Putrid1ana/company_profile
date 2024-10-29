<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Beranda</title>
  <!-- Meta Tags -->
  <meta name="title" content="Beranda">
  <meta name="description" content="Selamat datang di Beranda Healthy Milk, tempat Anda bisa menemukan informasi terbaru seputar produk susu sehat, manfaatnya, dan tips gaya hidup sehat.">

  <!-- Canonical Tag -->
  <link rel="canonical" href="<?= current_url() ?>">

  <!-- Link untuk FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <style>
    /* Container styling */
    .card-container {
      display: flex;
      overflow-x: scroll;
      white-space: nowrap;
      /* Keep cards on a single row */
      -ms-overflow-style: none;
      /* Hide scrollbar on IE and Edge */
      scrollbar-width: none;
      /* Hide scrollbar on Firefox */
    }

    .card-container::-webkit-scrollbar {
      display: none;
      /* Hide scrollbar on Chrome, Safari and Opera */
    }

    /* Card styling */
    .card {
      display: inline-block;
      width: 250px;
      height: 350px;
      border-radius: 8px;
      border: 1px solid #E0E0E0;
      flex-direction: column;
      padding: 18px;
      margin-right: 16px;
      /* Space between cards */
    }

    .card-icon-container {
      width: 40px;
      height: 40px;
      justify-content: center;
      align-items: center;
      display: inline-flex;
    }

    .card-icon {
      width: 29.72px;
      height: 22.79px;
      background: #121212;
    }

    /* Content styling */
    .card-content {
      width: 100%;
      height: auto;
      margin-top: 12px;
      color: black;
      font-size: 12px;
      font-family: Roboto;
      font-weight: 400;
      line-height: 30px;
      /* Better line height */
      overflow-wrap: break-word;
      /* Break long words */
      word-wrap: break-word;
    }

    /* Ensure long text stays inside */
    .card-content span {
      display: block;
      width: 100%;
      /* Ensure span takes full width */
      word-wrap: break-word;
      overflow-wrap: break-word;
      white-space: normal;
      /* Ensure text wraps to new lines */
    }


    .card-footer {
      justify-content: flex-start;
      align-items: center;
      display: inline-flex;
      margin-top: 80px;
    }

    .card-footer img {
      width: 64px;
      height: 64px;
      border-radius: 32px;
      overflow: hidden;
    }

    .card-footer div {
      margin-left: 8px;
      color: #333333;
      font-size: 16px;
      font-family: Roboto;
      font-weight: 700;
      line-height: 24px;
    }

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

    .news-container {
      width: 100%;
      display: flex;
      justify-content: center;
      gap: 10px;
      max-width: 1440px;
      margin: 0 auto;
      height: auto;
      /* Change height to auto for flexibility */
      align-items: flex-start;
      flex-wrap: wrap;
      /* Allow items to wrap to next line */
    }

    .news-item {
      width: 300px;
      height: 300px;
      background: white;
      box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.10);
      border-radius: 14px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
      transition: all 0.3s;
      /* Add transition for hover effects */
    }

    .news-blue {
      background: #10398ef5;
    }

    .icon-circle {
      width: 77px;
      height: 77px;
      background: #01579B;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .inner-circle {
      width: 35px;
      /* Use a standard width for the inner circles */
      height: 35px;
      color: black;
      /* Set color untuk ikon centang */
      font-size: 36px;
      /* Atur ukuran ikon */
    }

    .title {
      text-align: center;
      color: #242b34;
      font-size: 20px;
      font-family: Nunito, sans-serif;
      font-weight: 600;
      margin-top: 10px;
    }

    .description {
      text-align: center;
      color: #171819;
      font-size: 16px;
      font-family: Inter, sans-serif;
      font-weight: 400;
      line-height: 22.4px;
      margin-top: 10px;
    }

    /* artikel */
    .artikel-container {
      width: 100%;
      height: auto;
      padding: 40px 0;
      background: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: space-between;
    }

    /* Heading */
    .heading-container {
      text-align: center;
    }

    .heading {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
    }

    .heading-line {
      width: 50px;
      height: 2px;
      background: #1BBCA3;
    }

    .heading-title {
      font-size: 32px;
      font-weight: 700;
      color: #384F4B;
    }

    /* Kotak Artikel */
    .artikel-box {
      width: 320px;
      height: 275px;
      padding-top: 24px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      flex: 1 1 calc(25% - 16px);
      /* Menjadi empat kolom */
      margin: 8px;
    }

    .artikel-box a {
      text-decoration: none;
      color: inherit;
    }

    .artikel-content {
      width: 100%;
      height: 251px;
      padding: 12px;
      display: flex;
      justify-content: flex-start;
      align-items: flex-start;
    }

    .artikel-inner {
      width: 100%;
      padding: 30px;
      background: linear-gradient(180deg, #D5EBFF 0%, white 66%);
      box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10);
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      gap: 10px;
    }

    .artikel-image {
      width: 160.75px;
      height: 80px;
    }

    .artikel-title {
      color: #384F4B;
      font-size: 10px;
      font-family: Inter, sans-serif;
      font-weight: 700;
      text-decoration: underline;
      line-height: 24px;
      word-wrap: break-word;
    }

    .artikel-description {
      color: #444444;
      font-size: 9px;
      font-family: Roboto, sans-serif;
      font-weight: 400;
      line-height: 24px;
      word-wrap: break-word;
    }

    /* aktivitas */
    .activity-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .activity-card {
      width: 350px;
      margin: 12px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10);
      border-radius: 6px;
      background: white;
      position: relative;
    }

    .activity-container {
      flex-direction: row;
      justify-content: center;
    }

    .activity-card {
      width: calc(100% - 24px);
      max-width: 350px;
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
      .banner div div {
        padding: 20px;
      }

      .banner h1 {
        font-size: 8vw;
        /* Memperbesar ukuran font agar proporsional di mobile */
      }

      .banner p {
        font-size: 3.5vw;
        /* Memperbesar ukuran font deskripsi di mobile */
        margin: 15px 0;
      }

      .banner a {
        padding: 8px 24px;
        /* Menyesuaikan padding tombol agar pas di layar kecil */
      }

      /* news */
      .news-item {
        width: calc(100% - 20px);
        /* Full width minus gap */
        height: auto;
        /* Allow height to adjust */
        margin-bottom: 20px;
        /* Add spacing between items */
      }

      .icon-circle {
        width: 50px;
        /* Smaller icons for smaller screens */
        height: 50px;
      }

      .title {
        font-size: 18px;
        /* Slightly smaller font for titles */
      }

      .description {
        font-size: 14px;
        /* Smaller font for descriptions */
      }

      /* icon */
      div[style*="background: #E1F5FE"] {
        padding-left: 20px;
        padding-right: 20px;
      }

      div[style*="font-size: 48px;"] {
        font-size: 24px;
        /* Ukuran font lebih kecil di layar mobile */
      }

      div[style*="margin-right: 20px;"] {
        margin-right: 10px;
        /* Kurangi jarak margin untuk ikon */
      }

      /* Article Cards */
      .article-card {
        flex: 1 1 calc(33.33% - 24px);
        margin-bottom: 16px;
      }

      .article-card img {
        width: 100%;
        height: auto;
      }

      .article-card div {
        font-size: 12px;
        /* Sesuaikan ukuran font agar lebih pas di layar kecil */
      }

      .artikel-box {
        flex: 1 1 calc(33.33% - 16px);
        /* Membuat tiga kolom di layar kecil */
      }

      /* galeri*/
      .card-container {
        flex-direction: column;
        /* Change to column layout */
        align-items: center;
        /* Center cards */
      }

      .card {
        width: 100%;
        /* Full width for cards on small screens */
        margin-bottom: 20px;
        /* Space between cards */
      }

      /* Aktivitas */
      .activity-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .activity-card {
        width: 350px;
        margin: 12px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10);
        border-radius: 6px;
        background: white;
        position: relative;
      }

      .activity-container {
        flex-direction: row;
        justify-content: center;
      }

      .activity-card {
        width: calc(100% - 24px);
        max-width: 350px;
      }

      /* Footer atas */
      .footer-container {
        flex-direction: column;
        /* Susun kolom secara vertikal pada layar kecil */
        align-items: center;
        /* Pusatkan kolom pada layar kecil */
        gap: 20px;
        /* Beri jarak antar kolom */
      }

      .footer-container>div {
        text-align: center;
        /* Pusatkan teks dalam kolom */
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

<body style="margin:0px;">

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
    <div style="width: 100%; height: 100vh; background-image: url('/profile.jpg'); background-size: cover; background-position: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
      <div style="background: rgba(42, 43, 63, 0.75); padding: 40px; text-align: center; color: white; max-width: 800px;">
        <h1 style="font-size: 4vw; font-family: Roboto; font-weight: 700; margin: 0;">Welcome To My Healthy Milk</h1>
        <p style="font-size: 1.5vw; font-family: Poppins; font-style: italic; margin: 20px 0;">Selamat datang di Healthy Milk, tempat terbaik untuk menemukan susu yang sehat dan berkualitas tinggi. Kami berdedikasi untuk menyediakan produk susu yang tidak hanya lezat tetapi juga mendukung gaya hidup sehat.</p>
        <a href="tentang" style="padding: 10px 34px; background: #0D6EFD; border-radius: 30px; color: white; text-decoration: none; font-family: Nunito; font-weight: 700;">Baca Selengkapnya</a>
      </div>
    </div>
  </div>

  <!-- news -->
  <div class="news-container">
    <!-- news 1 -->
    <div class="news-item news-white">
      <div class="icon-circle">
        <i class="fas fa-check-double inner-circle"></i>
      </div>
      <div class="title">Local Farmer</div>
    </div>

    <!-- news 2 -->
    <div class="news-item news-blue">
      <div class="icon-circle">
        <i class="fas fa-check-double inner-circle"></i>
      </div>
      <div class="title">Dairy Product</div>
    </div>

    <!-- news 3 -->
    <div class="news-item news-white">
      <div class="icon-circle">
        <i class="fas fa-check-double inner-circle"></i>
      </div>
      <div class="title">Tour Destination</div>
    </div>
  </div>

  <!--- icon -->
  <div style="align-self: stretch; height: auto; padding: 40px; background: #E1F5FE; display: flex; justify-content: center;">
    <div style="width: 100%; max-width: 1200px; display: flex; flex-direction: column; align-items: center;">
      <div style="display: flex; flex-direction: column; align-items: center;">
        <div style="width: 100%; max-width: 800px; padding: 0 12px; display: flex; justify-content: center; align-items: center;">
          <div style="display: flex; justify-content: center; align-items: center; border-radius: 50%; margin-right: 20px;">
            <span style="color: white; font-size: 24px;">😊</span>
          </div>
          <div style="text-align: center; color: #01579B; font-size: 40px; font-family: Roboto; font-weight: 700; line-height: 1.2; word-wrap: break-word;">
            Love Healthy Milk & Love You More
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- artikel -->
  <div class="artikel-container">
    <div class="heading-container">
      <div class="heading">
        <div class="heading-line"></div>
        <div class="heading-title">Artikel</div>
        <div class="heading-line"></div>
      </div>
    </div>

    <!-- Kotak Artikel -->
    <div class="artikel-box">
      <a href="<?= base_url('artikel/minum-susu-sehat-itu-penting') ?>">
        <div class="artikel-content">
          <div class="artikel-inner">
            <img class="artikel-image" alt="meminum susu" src="<?= base_url('articel/artikel1.jpg.png') ?>" />
            <div class="artikel-title">Mengapa Minum Susu Penting Untuk Kesehatan</div>
            <div class="artikel-description">Susu juga dapat dijadikan salah satu cara untuk memperoleh hidup sehat....<br />24 Agustus 2024</div>
          </div>
        </div>
      </a>
    </div>

    <div class="artikel-box">
      <a href="<?= base_url('artikel/susu-minuman-sehat-kaya-manfaat-dan-berkah-namun-kurang-peminat') ?>">
        <div class="artikel-content">
          <div class="artikel-inner">
            <img class="artikel-image" alt="meminum susu" src="<?= base_url('articel/artikel2.jpg.png') ?>" />
            <div class="artikel-title">Susu Minuman Sehat Kaya Manfaat dan Berkah</div>
            <div class="artikel-description">Apabila kita kaitkan dengan ilmu gizi saat ini istilah tersebut sangat sesuai....<br />24 Juni 2024</div>
          </div>
        </div>
      </a>
    </div>

    <div class="artikel-box">
      <a href="<?= base_url('artikel/inilah-manfaat-susu-murni-beserta-efek-sampingnya') ?>">
        <div class="artikel-content">
          <div class="artikel-inner">
            <img class="artikel-image" alt="meminum susu" src="<?= base_url('articel/artikel3.jpg.png') ?>" />
            <div class="artikel-title">Inilah Manfaat Susu Murni Beserta Efeknya</div>
            <div class="artikel-description">Manfaat susu murni dapat diperoleh karena susu ini mengandung nutrisi.....<br /> 31 Desember 2022</div>
          </div>
        </div>
      </a>
    </div>

    <div class="artikel-box">
      <a href="<?= base_url('artikel/potensi-olahan-susu-sapi-perah-sebagai-bahan-pangan') ?>">
        <div class="artikel-content">
          <div class="artikel-inner">
            <img class="artikel-image" alt="meminum susu" src="<?= base_url('articel/artikel4.jpg.png') ?>" />
            <div class="artikel-title">Potensi Olahan Susu Sapi sebagai Bahan Pangan</div>
            <div class="artikel-description">Susu sapi dan produk susu merupakan bahan makanan yang sangat bermanfaat...<br />8 Agustus 2023</div>
          </div>
        </div>
      </a>
    </div>

  </div>


  <!-- galeri produk -->
  <div style="width: 100%; max-width: none; background: linear-gradient(235deg, rgba(205, 238, 248, 0) 4%, white 50%, #A6D4FF 95%); display: flex; flex-direction: column; box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.10); justify-content: center; align-items:center; padding: 10px 0px;">
    <div style="height: 98.39px; padding-bottom: 50px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex;">
      <div style="align-self: stretch; height: 38.39px; padding-bottom: 1.39px; justify-content: center; align-items: center; gap: 15px; display: inline-flex;">
        <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
        <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter; font-weight: 700; line-height: 38.40px;">Galeri Produk</div>
        <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
      </div>
    </div>

    <!-- Container with horizontal scroll -->
    <div class="card-container" style="display: flex; overflow-x: auto; padding: 0 30px; gap: 10px;">
      <!-- Card 1 -->
      <div class="card">
        <div class="card-icon-container">
          <div class="card-icon"></div>
        </div>
        <div class="card-content">
          <span class="content-card">Minuman Greenfields adalah produk susu dan turunan susu yang diproduksi oleh PT Greenfields Indonesia.<br /></span>
          <span>• Susu segar Greenfields <br />• Yogurt Greenfields</span>
        </div>
        <div class="card-footer">
          <img alt="susu Greenfields" src="<?= base_url('galeri/galeri.jpg.png') ?>" />
          <div>Greenfields</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <div class="card-icon-container">
          <div class="card-icon"></div>
        </div>
        <div class="card-content">
          <span class="content-card">Minuman Ichitan adalah minuman siap saji yang diproduksi oleh PT Ichi Tan Indonesia. Ichitan menawarkan berbagai jenis minuman, seperti:<br /></span>
          <span>• Ichitan Brown Sugar Milk <br />• Ichitan Thai Milk Green Tea</span>
        </div>
        <div class="card-footer">
          <img alt="susu Ichitan" src="<?= base_url('galeri/galeri1.jpg.png') ?>" />
          <div>Ichitan</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <div class="card-icon-container">
          <div class="card-icon"></div>
        </div>
        <div class="card-content">
          <span class="content-card">Silk Nextmilk adalah susu nabati yang terbuat dari campuran gandum, kelapa, dan kedelai. Silk Milk hadir dalam berbagai rasa dan varian, mulai dari rasa plain, vanilla, hingga cokelat, dan sering digunakan dalam berbagai resep.<br /></span>
        </div>
        <div class="card-footer">
          <img alt="susu Silk" src="<?= base_url('galeri/galeri2.jpg.png') ?>" />
          <div>Silk Milk</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card">
        <div class="card-icon-container">
          <div class="card-icon"></div>
        </div>
        <div class="card-content">
          <span class="content-card">Ultra Milk merupakan susu segar alami yang diproses dengan teknologi Ultra High Temperature (UHT). Susu Ultra Milk mengandung berbagai nutrisi, seperti protein, karbohidrat, vitamin, dan mineral seperti kalsium, magnesium, dan fosfor.<br /></span>
        </div>
        <div class="card-footer">
          <img alt="susu Ultra" src="<?= base_url('galeri/galeri3.jpg.png') ?>" />
          <div>Ultra Milk</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content Section -->
  <div style="width: 100%; height: auto; padding: 40px 0; background: white; display: flex; flex-direction: column; align-items: center;">
    <div style="text-align: center; margin-bottom: 150px;">
      <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
        <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
        <div style="font-size: 32px; font-weight: 700; color: #384F4B;">Aktivitas</div>
        <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
      </div>
    </div>

    <div class="activity-container">
      <div class="activity-card">
        <a href="<?= base_url('aktivitas/penyajian-milk') ?>" style="text-decoration: none; color: inherit;">
          <img src="/aktifitas/ultramilk.jpg.png" alt="menuang susu" style="width: 100%; height: 220px;">
          <div style="padding: 24px; text-align: center;">
            <h3 style="font-size: 24px; font-weight: 700;">Penyajian Milk</h3>
            <p style="font-size: 16px; color: #444444;">Milk, minuman kaya nutrisi, disajikan untuk memenuhi kebutuhan gizi Anda dengan rasa yang lezat dan menyehatkan. </p>
          </div>
        </a>
      </div>

      <div class="activity-card">
        <a href="<?= base_url('aktivitas/pemindahan-milk') ?>" style="text-decoration: none; color: inherit;">
          <img src="/aktifitas/aktivitas.jpg.png" alt="susu kacang" style="width: 100%; height: 220px;">
          <div style="padding: 24px; text-align: center;">
            <h3 style="font-size: 24px; font-weight: 700;">Pemindahan Milk</h3>
            <p style="font-size: 16px; color: #444444;">Proses yang cermat untuk menjaga kualitas susu dari sumber hingga siap untuk dikonsumsi.</p>
          </div>
        </a>
      </div>

      <div class="activity-card">
        <a href="<?= base_url('aktivitas/peternakan') ?>" style="text-decoration: none; color: inherit;">
          <img src="/aktifitas/aktivitas2.jpg.png" alt="susu sapi putih" style="width: 100%; height: 220px;">
          <div style="padding: 24px; text-align: center;">
            <h3 style="font-size: 24px; font-weight: 700;">Peternakan</h3>
            <p style="font-size: 16px; color: #444444;">Tempat di mana sapi-sapi dipelihara secara intensif untuk menghasilkan produk-produk pangan, seperti susu dan daging.</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Footer atas -->
  <div style="width: 100%; background: #01579B; padding: 40px 20px; box-sizing: border-box;">
    <div class="footer-container" style="max-width: 1320px; margin: 0 auto; display: flex; justify-content: Center; align-items: flex-start; gap: 30px; flex-wrap: wrap;">

      <!-- Company Column -->
      <div style="flex: 1; color: white; min-width: 250px;">
        <div style="margin-bottom: 20px;">
          <div style="font-size: 18px; font-family: Roboto; font-weight: 500;">Company</div>
          <div style="width: 50px; height: 3px; background: rgba(178, 218, 255, 0.90);"></div>
        </div>
        <ul style="list-style: none; padding: 10px; margin: 0; line-height: 1.8;">
          <li><a href="#" style="color: white; text-decoration: none;">Tentang</a></li>
          <li><a href="#" style="color: white; text-decoration: none;">Artikel</a></li>
          <li><a href="#" style="color: white; text-decoration: none;">Produk</a></li>
          <li><a href="#" style="color: white; text-decoration: none;">Aktivitas</a></li>
          <li><a href="#" style="color: white; text-decoration: none;">Contact</a></li>
        </ul>
      </div>

      <!-- Contacts Column -->
      <div style="flex: 1; color: white; min-width: 250px;">
        <div style="margin-bottom: 20px;">
          <div style="font-size: 18px; font-family: Roboto; font-weight: 500;">Contacts</div>
          <div style="width: 50px; height: 3px; background: rgba(178, 218, 255, 0.90);"></div>
        </div>
        <ul style="list-style: none; padding: 0; margin: 0; line-height: 1.8;">
          <li>📍 Jl. Jaya Milk No. 123, Batu, Jawa Timur</li>
          <li>📞 +62 812-3456-7890</li>
          <li>✉️ info@gmail.com</li>
        </ul>
      </div>

      <!-- Newsletter Column -->
      <div style="flex: 1; color: white; min-width: 250px;">
        <div style="margin-bottom: 20px;">
          <div style="font-size: 18px; font-family: Roboto; font-weight: 500;">Newsletter</div>
          <div style="width: 50px; height: 3px; background: rgba(178, 218, 255, 0.90);"></div>
        </div>
        <p style="line-height: 1.8;">Fusce varius, dolor tempor interdum tristique bibendum</p>
        <form>
          <input type="email" placeholder="E-mail" style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">
          <button type="submit" style="background: #0277BD; color: white; padding: 10px 20px; border: none; cursor: pointer;">Subscribe Now</button>
        </form>
      </div>
    </div>

    <!-- Wave Image -->
    <div style="width: 100%; height: 100px; background: url('wave.png') no-repeat center center; background-size: cover; margin-top: 20px;"></div>
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