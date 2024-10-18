<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengapa Minum Susu Penting Untuk Kesehatan</title>

     <!-- Meta Tags -->
  <meta name="title" content="Mengapa Minum Susu Penting Untuk Kesehatan">
  <meta name="description" content="Pelajari mengapa minum susu sangat penting untuk kesehatan tubuh. Temukan manfaat susu dalam mendukung pertumbuhan, menjaga kesehatan tulang, dan meningkatkan daya tahan tubuh.">

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
      padding: -20px;
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
      margin-left: auto; /* Gambar akan berada di sebelah kanan */
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
        margin-left: 0; /* Kembali ke tengah pada layar kecil */
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
</head>

<body style="margin: 0px;">
    <!-- Background Section -->
    <div style="width: 100%; height: 100vh; position: relative; background: conic-gradient(from 180deg at 0% 100%, #A6D4FF 307deg, #D4ECFD 360deg);">

        <!-- Background Image Section -->
        <div style="width: 100%; height: 924px; background: #0E1A18; position: relative;">
            <img style="width: 100%; height: 924px; object-fit: cover;" src="/articel/artikel.jpg" alt="Background Image">
            <div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: rgba(14, 26, 24, 0.5);"></div>
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
                <h1 style="font-size: 48px; font-family: Roboto, sans-serif; font-weight: 700;">Artikel Healthy Milk</h1>
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

        <!-- Content Section -->
        <div style="display: flex; justify-content: space-between; width: 90%; padding: 20px; background: white;">
            <!-- Artikel Utama -->
            <div style="flex: 2; padding-right: 20px;">
                <img style="width: 100%; height: auto; border: 5px #A6D4FF solid;" alt="susu sapi import" src="/articel/artikel11.jpg" />
                <div style="padding: 20px; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 5px #A6D4FF solid; margin-top: 20px;">
                    <div style="color: black; font-size: 14px; font-family: Inika; font-weight: 400;">
                        24 Agustus 2024
                    </div>
                    <div style="color: black; font-size: 32px; font-family: Roboto; font-weight: 700; margin-top: 10px;">
                        Mengapa Minum Susu Penting Untuk Kesehatan
                    </div>
                    <div style="color: black; font-size: 16px; font-family: Times New Roman; font-weight: 400; margin-top: 20px; line-height: 1.6;">
                        <br> Mayoritas orang pasti suka minum susu. Bahkan hingga muncul istilah ‘jangan lupa nyusu’ seringkali terdengar. Selain rasanya yang enak, susu juga mengandung ragam nutrisi penting yang dapat menjaga organ tubuh senantiasa berfungsi dengan baik serta melindungi tubuh dari berbagai penyakit.
                        Susu juga dapat dijadikan salah satu cara untuk memperoleh hidup sehat. Mengonsumsi susu secara rutin mampu menjaga asupan nutrisi harian tetap terjaga. Secara umum, manfaat susu bagi usia dewasa adalah mencegah terserang berbagai penyakit, seperti penyakit kardiovaskular dan osteoporosis. Sementara untuk anak-anak, mengonsumsi susu dapat membantu tumbuh kembangnya.
                        Tubuh memerlukan ragam nutrisi guna menjaga organ-organ pada tubuh berfungsi dengan baik serta melindungi dari berbagai zat atau kuman penyebab penyakit. Nutrisi yang diperlukan tubuh terbagi menjadi dua jenis, yaitu makronutrisi dan mikronutrisi. Berikut penjelasannya: </br>

                        <br> ·Makronutrisi </br>

                        <br> Makronutrisi merupakan jenis nutrisi yang diperlukan tubuh dalam jumlah yang banyak. Makronutrisi umumnya seperti karbohidrat, protein dan lemak. </br>

                        <br> ·Mikronutrisi </br>

                        <br> Kebalikan dari makronutrisi, mikronutrisi adalah jenis nutrisi yang diperlukan tubuh dalam jumlah yang kecil. Mikronutrisi biasanya seperti vitamin, baik itu vitamin D dan vitamin B, serta mineral, baik itu kalsium ataupun zat besi.
                        Kedua jenis nutrisi tersebut dapat diperoleh secara alami dari ragam jenis makanan, seperti nasi, daging, ikan, telur, sayur-sayuran dan buah-buahan. Tentunya, kedua jenis nutrisi ini juga dapat diperoleh dari susu dan ragam produk olahan susu lainnya, seperti keju atau yoghurt.
                        Saat ini, susu tersedia dalam bentuk cair ataupun bubuk. Susu cair memiliki kelebihan yaitu dapat dengan mudah dikonsumsi. Sedangkan pada susu bubuk, ada beberapa kelebihan yang jarang disadari, yaitu: </br>

                        <br> ·Mudah disimpan </br>

                        <br> ·Tahan lama atau lebih awet </br>

                        <br> ·Harga lebih terjangkau </br>

                        <br> ·Dapat dikonsumsi sesuai dengan jumlah yang dibutuhkan </br>

                        <br> Tak hanya itu, susu kerap dijadikan ‘taktik’ oleh para orang tua agar buah hatinya dapat selalu dapat mengonsumsi makanan sehat. Karena tidak jarang anak-anak begitu sulit untuk makan dan kerap ‘pilih-pilih’ terhadap makanan (picky eater).
                        Selain itu, susu juga dapat dijadikan sebagai bahan dasar untuk diolah menjadi ragam hidangan yang menarik, seperti smoothies, campuran jus atau pudding.
                        Susu merupakan sumber nutrisi yang baik, jadi sudah sepatutnya untuk dikonsumsi secara rutin sebagai salah satu cara menerapkan gaya hidup sehat. Jangan lupa untuk memperhatikan kandungan gizi dan kalori yang tertera pada kemasan ketika membeli susu. Juga jangan lupa untuk memperhatikan frekuensi minum susu pada anak. Konsumsi susu yang disarankan untuk anak adalah 2 kali sehari.
                        Untuk para orang tua, tidak perlu ragu untuk berkonsultasi dengan dokter guna menentukan jenis susu apa yang cocok serta jumlah konsumsi susu yang tepat untuk buah hati berdasarkan kebutuhan dan kondisi kesehatannya. Download aplikasi IHC Telemed di App Store dan Google Play dan nikmati layanan konsultasi langsung dengan dokter IHC dimanapun dan kapanpun. IHC Telemed, sehat dalam genggaman. </br>

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
                    <a href="<?= base_url('artikel/susu-minuman-sehat-kaya-manfaat-dan-berkah-namun-kurang-peminat') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="susu banyak manfaat" src="<?= base_url('articel/artikel2.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">24 Juni 2024</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">SUSU MINUMAN SEHAT KAYA MANFAAT DAN BERKAH NAMUN KURANG PEMINAT....</div>
                            </div>
                        </div>
                    </a>

                    <hr style="border: 1px solid #A6D4FF;">

                    <!-- Artikel 2 -->
                    <a href="<?= base_url('artikel/inilah-manfaat-susu-murni-beserta-efek-sampingnya') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="susu murni dari sapi" src="<?= base_url('articel/artikel3.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">31 Desember 2022</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Inilah Manfaat Susu Murni Beserta Efek Sampingnya...</div>
                            </div>
                        </div>
                    </a>

                    <hr style="border: 1px solid #A6D4FF;">

                    <!-- Artikel 3 -->
                    <a href="<?= base_url('artikel/potensi-olahan-susu-sapi-perah-sebagai-bahan-pangan') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="susu untuk bahan pangan" src="<?= base_url('articel/artikel4.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">08 Agustus 2023</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Potensi Olahan Susu Sapi Perah sebagai Bahan Pangan....</div>
                            </div>
                        </div>
                    </a>
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