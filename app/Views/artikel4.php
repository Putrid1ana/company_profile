<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potensi Olahan Susu Sapi Perah sebagai Bahan Pangan</title>

     <!-- Meta Tags -->
  <meta name="title" content="Potensi Olahan Susu Sapi Perah sebagai Bahan Pangan">
  <meta name="description" content="Eksplorasi potensi olahan susu sapi perah sebagai bahan pangan bergizi. Temukan berbagai manfaat dan produk olahan susu yang dapat mendukung kebutuhan nutrisi harian Anda.">

  <!-- Canonical Tag -->
  <link rel="canonical" href="<?= current_url() ?>">

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
      top: 20px;
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

    /* Container utama */
    .artikel-container {
      width: 100%;
      height: auto;
      padding: 40px 0;
      background: linear-gradient(234deg, #A6D4FF 0%, white 40%, rgba(178, 218, 255, 0.09) 96%);
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

      div[style*="display: flex; justify-content: space-between;"] {
        flex-direction: column;
        width: 100%;
        padding: 10px;
    }
    div[style*="flex: 2; padding-right: 20px;"] {
        padding-right: 0;
        margin-bottom: 20px;
    }
    div[style*="flex: 1;"] {
        margin-top: 0;
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
       <!-- Banner Section -->
  <div class="banner">
    <img src="/articel/artikel.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Artikel Healthy Milk</h1>
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


        <!-- Content Section -->
        <div style="display: flex; justify-content: space-between; width: 90%; padding: 20px; background: white;">
            <!-- Artikel Utama -->
            <div style="flex: 2; padding-right: 20px;">
                <img style="width: 100%; height: auto; border: 5px #A6D4FF solid;" alt="susu bahan pangan" src="/articel/artikel11.jpg" />
                <div style="padding: 20px; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 5px #A6D4FF solid; margin-top: 20px;">
                    <div style="color: black; font-size: 14px; font-family: Inika; font-weight: 400;">
                    08 Agustus 2023
                    </div>
                    <div style="color: black; font-size: 32px; font-family: Roboto; font-weight: 700; margin-top: 10px;">
                    Potensi Olahan Susu Sapi Perah sebagai Bahan Pangan
                    </div>
                    <div style="color: black; font-size: 16px; font-family: Times New Roman; font-weight: 400; margin-top: 20px; line-height: 1.6;">
                    <br> Susu sapi dan produk susu sapi merupakan bahan makanan yang sangat bermanfaat bagi manusia dan merupakan sumber kaya nutrisi yang mampu memenuhi kebutuhan gizi manusia. Peluang pasar untuk susu segar di Indonesia juga masih relatif besar, pasalnya anggapan masyarakat Indonesia saat ini menunjukkan peningkatan terhadap konsumsi susu, dibuktikan dengan banyaknya minat anak-anak membeli produk olahan susu cair. Berbagai kampanye penyadaran mengenai pentingnya mengonsumsi susu segar sejatinya perlu dilakukan untuk meningkatkan konsumsi susu sapi segar di Indonesia.  </br>

                    <br> Pasar susu sapi di Indonesia salah satunya susu bubuk, mencapai 40-50% dan menunjukkan bahwa masyarakat lebih banyak memilih mengonsumsi susu bubuk daripada susu cair. Alasannya adalah susu bubuk memiliki daya tahan simpan yang lama serta kandungan lemaknya sudah digantikan dengan minyak sawit (palm oil). Pasar susu berikutnya yaitu susu kental manis, dengan persentase 30-40%. Susu kental manis memiliki daya tahan cukup lama dibandingkan susu segar dan biasa digunakan sebagai bahan baku makanan atau kue. </br>

                    <br> Peternakan sapi di Kalurahan Glagaharjo, Kapanewon Cangkringan, Kabupaten Sleman dikenal sebagai salah satu sentra penghasil susu sapi terbesar di DIY. Kepala Dinas Pertanian, Pangan dan Perikanan (DP3) Kabupaten Sleman, Suparmono, mengatakan bahwa Glagaharjo merupakan kawasan lereng Merapi yang mempunyai populasi sapi perah terbanyak di Sleman sehingga sapi perah milik warga mendapat prioritas untuk dilestarikan dan mendapat alokasi vaksin. Di tengah ancaman erupsi Merapi, geliat kegiatan para peternak sapi di Kalurahan Glagaharjo masih sangat kuat. Kalurahan ini menjadi cikal bakal bagi lebih dari 500 peternak sapi yang menghasilkan 8.400 liter susu sapi per hari yang dipasok ke beberapa industri susu sapi besar di Indonesia seperti Nestle dan Ultra Jaya. </br> 
                    </div>
                </div>
            </div>

            <!-- Sidebar "Baca Juga" -->
            <div style="flex: 1;">
                <div style="background: white; padding: 20px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 2px #A6D4FF solid;">
                    <div style="text-align: center; font-size: 24px; font-family: Inika; font-weight: 400; margin-bottom: 10px;">
                        Baca Juga
                    </div>
                    <!-- Artikel 1 -->
                    <a href="<?= base_url('artikel/minum-susu-sehat-itu-penting') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="susu kesehatan" src="<?= base_url('articel/artikel1.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">24 Agustus 2024</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Mengapa Minum Susu Penting Untuk Kesehatan....</div>
                            </div>
                        </div>
                    </a>

                    <hr style="border: 1px solid #A6D4FF;">

                    <!-- Artikel 2 -->
                    <a href="<?= base_url('artikel/susu-minuman-sehat-kaya-manfaat-dan-berkah-namun-kurang-peminat') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="susu berkah" src="<?= base_url('articel/artikel2.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">24 Juni 2024</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">SUSU MINUMAN SEHAT KAYA MANFAAT DAN BERKAH NAMUN KURANG PEMINAT.....</div>
                            </div>
                        </div>
                    </a>

                    <hr style="border: 1px solid #A6D4FF;">

                    <!-- Artikel 3 -->
                    <a href="<?= base_url('artikel/inilah-manfaat-susu-murni-beserta-efek-sampingnya') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="susu sapi berkah" src="<?= base_url('articel/artikel3.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">31 Desember 2022</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Inilah Manfaat Susu Murni Beserta Efek Sampingnya...</div>
                            </div>
                        </div>
                    </a>
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</body>

</html>