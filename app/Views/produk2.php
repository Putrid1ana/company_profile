<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Icithan</title>

   <!-- Meta Tags -->
   <meta name="title" content="Icithan">
   <meta name="description" content="Icithan menawarkan produk susu berkualitas tinggi dengan manfaat kesehatan yang luar biasa. Temukan pilihan susu terbaik untuk gaya hidup sehat Anda.">

  <!-- Canonical Tag -->
  <link rel="canonical" href="<?= current_url() ?>">

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
        max-width: 100%;
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
    <img src="/product/produk12.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Tentang Healthy Milk</h1>
    </div>
  </div>

  <!-- Tentang Kami Section -->
  <div style="width: 99%; max-width: none; min-height: 828px; background: linear-gradient(180deg, #A6D4FF 0%, white 21%); display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 60px 12px;">
    <!-- Section Title -->
    <div class="section-title">
      <div style="width: 50px; height: 2px; background: #1F9CF7;"></div>
      <h1>Produk Kami</h1>
      <div style="width: 50px; height: 2px; background: #1F9CF7;"></div>
    </div>

    <!-- Section Content with Image -->
    <div class="tentang-kami-content">
      <!-- Teks Konten -->
      <div>
        <p>Selamat datang di Healthy Milk, tempat terbaik untuk menemukan susu yang sehat dan berkualitas tinggi. Kami berdedikasi untuk menyediakan produk susu yang tidak hanya lezat tetapi juga mendukung gaya hidup sehat.</p>
        <p>Di Healthy Milk, misi kami adalah menginspirasi dan mendukung kesehatan melalui produk susu yang alami dan bergizi. Kami percaya bahwa nutrisi yang baik adalah fondasi dari kehidupan yang bahagia dan seimbang. Kami menawarkan berbagai macam produk susu yang diproduksi dari sapi yang dipelihara dengan baik, bebas dari hormon dan antibiotik. Setiap tetes susu kami kaya akan vitamin dan mineral esensial yang diperlukan oleh tubuh Anda.</p>
      </div>

      <!-- Gambar -->
      <div>
        <img src="/about/tentang1.jpg.png" alt="Susu dan Croissant" />
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div style="display: flex; gap: 15px;">
      <!-- Icon Facebook -->
      <a href="https://facebook.com" target="_blank" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
        <i class="fab fa-facebook-f" style="color: white;"></i>
      </a>

       <!-- Icon YouTube -->
       <a href="https://youtube.com" target="_blank" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
       <i class="fab fa-youtube" style="color: white;"></i>
          </a>

      <!-- Icon Twitter -->
      <a href="https://twitter.com" target="_blank" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
        <i class="fab fa-twitter" style="color: white;"></i>
      </a>

      <!-- Icon Instagram -->
      <a href="https://instagram.com" target="_blank" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
        <i class="fab fa-instagram" style="color: white;"></i>
      </a>
    </div>
    <div style="color: white; font-family: Inika; font-size: 16px;">Copyright © 2024 Healthy Milk, Design by Healthy Milk</div>
  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>

</html>
