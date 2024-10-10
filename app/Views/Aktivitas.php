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

<body>

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
      <h1 class="banner-title">Aktivitas Healthy Milk</h1>
    </div>
  </div>

    <!-- Main Content Section -->
    <div style=" width: 64%; align-self: stretch; height: 778px; padding-left: 300px; padding-right: 300px; padding-top: 60px; padding-bottom: 60px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style="height: 98.39px; padding-bottom: 60px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
        <div style="align-self: stretch; height: 38.39px; padding-bottom: 1.39px; padding-left: 470.22px; padding-right: 470.23px; justify-content: flex-start; align-items: center; gap: 15px; display: inline-flex">
          <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
          <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter; font-weight: 700; line-height: 38.40px; word-wrap: break-word">Aktivitas</div>
          <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
        </div>
      </div>
      <div style="height: 491.80px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
        <div style="align-self: stretch; justify-content: center; align-items: flex-start; display: inline-flex">
          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas/penyajian-milk') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 416px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 30px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 26.14px; padding-right: 26.14px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Penyajian Milk</div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 30px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 24.14px; padding-right: 24.16px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Eum ad dolor et. Autem aut fugiat debitis<br />voluptatem consequuntur sit. Et veritatis id.</div>
                  </div>
                </div>
                <img style="width: 391.79px; height: 220px; left: 12px; top: 36.46px; position: absolute" alt="susu kaya manfaatnya" src="/aktifitas/ultramilk.jpg.png" />
              </div>
            </a>
          </div>
          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas/pemindahan-milk') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 416px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 30px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 10.61px; padding-right: 10.62px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Pemindahan Milk</div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 30px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 22.97px; padding-right: 22.97px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Repudiandae amet nihil natus in distinctio<br />suscipit id. Doloremque ducimus ea sit non.</div>
                  </div>
                </div>
                <img style="width: 391.11px; height: 220px; left: 12px; top: 39.46px; position: absolute" alt="susu putih sehat" src="/aktifitas/aktivitas.jpg.png" />
              </div>
            </a>
          </div>
          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas/peternakan') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 416px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 30px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 17.59px; padding-right: 17.60px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Peternakan </div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 30px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 11.27px; padding-right: 11.27px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Consequuntur aliquid ab incidunt. Ex quos qui et vero et aut in. Reprehenderit.</div>
                  </div>
                </div>
                <img style="width: 392.47px; height: 220px; left: 12px; top: 41.46px; position: absolute" alt="susu sapi sehat" src="/aktifitas/aktivitas2.jpg.png" />
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