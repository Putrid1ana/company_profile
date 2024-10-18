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

    /* Content Section */
    .tentang-kami-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 900px;
      margin-top: 40px;
      padding: 0 20px;
    }

    .tentang-kami-content div {
      flex: 1;
    }

    .tentang-kami-content p {
      text-align: justify;
      font-size: 20px;
      font-style: italic;
      line-height: 1.8;
      color: black;
    }

    .tentang-kami-content img {
      max-width: 300px;
      height: auto;
      margin-left: auto;
      /* Gambar akan berada di sebelah kanan */
      display: block;
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

      /* Content */
      .tentang-kami-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
        margin-top: 20px;
      }

      .tentang-kami-content p {
        font-size: 18px;
      }

      .tentang-kami-content img {
        max-width: 300px;
        height: auto;
        margin-left: 0;
        /* Kembali ke tengah pada layar kecil */
        margin-right: 0;
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

      .tentang-kami-content p {
        font-size: 16px;
      }

      .section-title h1 {
        font-size: 24px;
      }
    }
  </style>

  <link rel="canonical" href="<?= current_url() ?>">
</head>

<body style="margin:0px;">
  <!-- Main Wrapper -->
  <div style="width: 100%; background: white; display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-start;">

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

    <!-- Main Content Section -->
    <div style="width: 100%; max-width: none; margin-top: 100px; display: flex; justify-content: center; align-items: center;">
      <div style="width: 100%; height: 100vh; background-image: url('/profile.jpg'); background-size: cover; background-position: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div style="background: rgba(42, 43, 63, 0.75); padding: 40px; text-align: center; color: white; width: 90%; max-width: 800px;">
          <h1 style="font-size: 4vw; font-family: Roboto; font-weight: 700;">Welcome To My Healthy Milk</h1>
          <p style="font-size: 1.5vw; font-family: Poppins; font-style: italic;">Selamat datang di Healthy Milk, tempat terbaik untuk menemukan susu yang sehat dan berkualitas tinggi. Kami berdedikasi untuk menyediakan produk susu yang tidak hanya lezat tetapi juga mendukung gaya hidup sehat.</p>
          <a href="tentang" style="padding: 12px 34px; background: #0D6EFD; border-radius: 30px; color: white; text-decoration: none; font-family: Nunito; font-weight: 700;">Baca Selengkapnya</a>
        </div>
      </div>
    </div>

    <div style="width: 100%; display: flex; justify-content: center; gap: 10px; max-width: 1440px; margin: 0 auto; height: 376px; align-items: flex-start;">
      <!-- Card 1 -->
      <div style="width: 300px; height: 300px; background: white; box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.10); border-radius: 14px; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative;">
        <div style="width: 77px; height: 77px; background: #01579B; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
          <div style="width: 35px; height: 35px; background: white;"></div>
        </div>
        <div style="text-align: center; color: #01579B; font-size: 20px; font-family: Nunito; font-weight: 600; margin-top: 10px;">
          Local Farmer
        </div>
        <div style="text-align: center; color: #797A8C; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 22.4px; margin-top: 10px;">
          Tortor arcu rutrum maecenas viverra<br />tincidunt justo. Tempor dictumst mi augue<br />rutrum sagittis dis habitant condimentum.
        </div>
      </div>

      <!-- Card 2 -->
      <div style="width: 300px; height: 300px; background: #01579B; border-radius: 14px; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative;">
        <div style="width: 77px; height: 77px; background: white; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
          <div style="width: 29.77px; height: 26.25px; background: #01579B;"></div>
        </div>
        <div style="text-align: center; color: white; font-size: 20px; font-family: Nunito; font-weight: 600; margin-top: 10px;">
          Dairy Product
        </div>
        <div style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 22.4px; margin-top: 10px;">
          Tortor arcu rutrum maecenas viverra<br />tincidunt justo. Tempor dictumst mi augue<br />rutrum sagittis dis habitant condimentum.
        </div>
      </div>

      <!-- Card 3 -->
      <div style="width: 300px; height: 300px; background: white; box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.10); border-radius: 14px; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative;">
        <div style="width: 77px; height: 77px; background: #01579B; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
          <div style="width: 33.26px; height: 33.26px; background: white;"></div>
        </div>
        <div style="text-align: center; color: #01579B; font-size: 20px; font-family: Nunito; font-weight: 600; margin-top: 10px;">
          Tour Destination
        </div>
        <div style="text-align: center; color: #797A8C; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 22.4px; margin-top: 10px;">
          Tortor arcu rutrum maecenas viverra<br />tincidunt justo. Tempor dictumst mi augue<br />rutrum sagittis dis habitant condimentum.
        </div>
      </div>
    </div>

    <!--- icon -->
    <div style="align-self: stretch; height: 135px; padding-top: 20px; padding-bottom: 50px; padding-left: 300px; padding-right: 300px; background: #E1F5FE; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style="width: 100%; max-width: 1200px; height: auto; display: flex; flex-direction: column; align-items: center;">
        <div style="align-self: stretch; justify-content: center; align-items: center; display: flex; flex-direction: column;">
          <div style="align-self: stretch; height: 199px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: center; display: flex">
            <div style="width: 800px; height: 157px; position: relative; display: flex; justify-content: center; align-items: center;">
              <div style="height: 44px; width: 44px; display: flex; justify-content: center; align-items: center; border-radius: 50%; margin-right: 120%;">
                <!-- Ikon senyum -->
                <span style="color: white; font-size: 24px;">😊</span>
              </div>
              <div style="position: absolute; height: 109px;">
                <div style="position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #01579B; font-size: 48px; font-family: Roboto; font-weight: 700; line-height: 40px; text-align: center; word-wrap: break-word;">
                  Love Healthy Milk & Love You More
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- artikel -->
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

    <!-- galeri produk -->
    <div style="width: 100%; max-width: none; background: linear-gradient(235deg, rgba(205, 238, 248, 0) 4%, white 50%, #A6D4FF 95%); display: flex; flex-direction: column; box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.10); justify-content: center; align-items:center; padding: 10px 0px ">
      <div style="height: 98.39px; padding-bottom: 50px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
        <div style="align-self: stretch; height: 38.39px; padding-bottom: 1.39px; justify-content: center; align-items: center; gap: 15px; display: inline-flex">
          <div style="width: 50px; height: 2px; background: #1BBCA3"></div>
          <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter; font-weight: 700; line-height: 38.40px;">Galeri Produk</div>
          <div style="width: 50px; height: 2px; background: #1BBCA3"></div>
        </div>
      </div>

      <!-- Container with horizontal scroll -->
      <div class="card-container">
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
            <span class="content-card">Minuman Ichitan adalah minuman siap saji yang diproduksi oleh PT Ichi Tan Indonesia. Ichitan menawarkan berbagai jenis minuman, seperti: <br /></span>
            <span>• Ichitan Brown Sugar Milk <br />• Ichitan Thai Milk Green Tea</span>
          </div>
          <div class="card-footer">
            <img alt="susu Greenfields" src="<?= base_url('galeri/galeri1.jpg.png') ?>" />
            <div>Ichitan</div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
          <div class="card-icon-container">
            <div class="card-icon"></div>
          </div>
          <div class="card-content">
            <span class="content-card">Silk Nextmilk adalah susu nabati yang terbuat dari campuran gandum, kelapa, dan kedelai. Susu ini memiliki rasa, komponen nutrisi, dan komposisi molekuler yang mirip dengan susu sapi. Silk Nextmilk dirancang dari susu sapi ke susu nabati.<br /></span>
          </div>
          <div class="card-footer">
            <img alt="susu Greenfields" src="<?= base_url('galeri/galeri2.jpg.png') ?>" />
            <div>Silk Milk</div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="card">
          <div class="card-icon-container">
            <div class="card-icon"></div>
          </div>
          <div class="card-content">
            <span class="content-card"> Ultra Milk merupakan susu segar alami yang diproses dengan teknologi Ultra High Temperature (UHT). Susu Ultra Milk mengandung berbagai nutrisi, seperti protein, karbohidrat, vitamin, dan mineral seperti kalsium, magnesium, dan fosfor.<br /></span>
          </div>
          <div class="card-footer">
            <img alt="susu ultra" src="<?= base_url('galeri/galeri3.jpg.png') ?>" />
            <div>Ultra Milk</div>
          </div>
        </div>

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
    <div style="width: 100%; background: #01579B; padding: 40px 20px; box-sizing: border-box;">
      <div style="max-width: 1320px; margin: 0 auto; display: flex; justify-content: space-between; align-items: flex-start; gap: 30px;">

        <!-- Company Column -->
        <div style="flex: 1; color: white;">
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
        <div style="flex: 1; color: white;">
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
        <div style="flex: 1; color: white;">
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