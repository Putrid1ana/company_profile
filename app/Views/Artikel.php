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
      width: 97%;
      max-width: none;
      height: 75px;
      padding: 13px 20px;
      background: white;
      box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      z-index: 100;
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
      .navbar {
        height: auto;
        padding: 10px 20px;
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
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