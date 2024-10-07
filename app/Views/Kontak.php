<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthy Milk-Aktivitas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* CSS Global Styles */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f8f8f8;
    }

    /* Navbar Styles */
    .navbar {
      width: 100%;
      max-width: 1440px;
      height: 75px;
      padding: 13px 184.49px;
      background: white;
      box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      z-index: 100;
    }

    .navbar-logo {
      font-size: 30px;
      font-weight: 700;
    }

    .navbar-link {
      text-decoration: none;
      color: black;
      font-size: 16px;
      margin-left: 20px;
    }

    /* Footer Styles */
    .footer {
      width: 100%;
      height: 98px;
      background: black;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.17);
    }

    .social-icon {
      width: 32px;
      height: 32px;
      background: rgba(255, 255, 255, 0.17);
      border-radius: 16px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: 10px;
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .navbar {
        padding: 10px 20px;
        flex-direction: column;
        gap: 10px;
      }

      .navbar-logo {
        font-size: 24px;
      }

      .navbar-link {
        font-size: 14px;
      }

      .product-container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>
  <!-- Background Section -->
  <div style="width: 100%; height: 100vh; position: relative; background: conic-gradient(from 180deg at 0% 100%, #A6D4FF 307deg, #D4ECFD 360deg);">

    <!-- Background Image Section -->
    <div style="width: 100%; height: 924px; background: #0E1A18; position: relative;">
      <img style="width: 100%; height: 924px; object-fit: cover;" src="/aktifitas/aktivitas1.jpg" alt="Background Image">
      <div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: rgba(14, 26, 24, 0.5);"></div>
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
        <h1 style="font-size: 48px; font-weight: 700;">Kontak Healthy Milk</h1>
      </div>
    </div>

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

    <div style="width: 100%; height: 734px; position: relative; background: linear-gradient(188deg, #A6D4FF 16%, #D3E9FF 30%, white 44%);">
      <!-- Bagian Gambar -->
      <div style="width: 539px; height: 426px; position: absolute; right: 100px; top: 134px;">
        <img style="width: 90%; height: 100%;" src="https://via.placeholder.com/539x426" alt="Placeholder Image" />
      </div>

      <!-- Bagian Judul Kontak -->
      <div style="position: absolute; top: 36px; left: 60px; width: 100%;">
        <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
          <div style="width: 50px; height: 2px; background: #1F9CF7;"></div>
          <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter, sans-serif; font-weight: 700; line-height: 38.4px;">Kontak</div>
          <div style="width: 50px; height: 2px; background: #1F9CF7;"></div>
        </div>
      </div>

      <!-- Call Us Box -->
      <div style="position: absolute; top: 141px; left: 108px;">
        <div style="width: 319px; padding: 24px; background: #DCDDE8;">
          <div style="display: flex; align-items: center; margin-bottom: 16px;">
            <div style="width: 38px; height: 38px; background: #1F9CF7;"></div>
          </div>
          <div style="font-size: 20px; font-family: Inter, sans-serif; font-weight: 700; color: #384F4B;">Call Us</div>
          <div style="font-size: 14px; font-family: Roboto, sans-serif; color: #444444;">+1 5589 55488 55</div>
          <div style="font-size: 14px; font-family: Roboto, sans-serif; color: #444444;">+1 6678 254445 41</div>
        </div>
      </div>

      <!-- Email Us Box -->
      <div style="position: absolute; top: 413px; left: 108px;">
        <div style="width: 319px; padding: 24px; background: #DCDDE8;">
          <div style="display: flex; align-items: center; margin-bottom: 16px;">
            <div style="width: 38px; height: 38px; background: #1F9CF7;"></div>
          </div>
          <div style="font-size: 20px; font-family: Inter, sans-serif; font-weight: 700; color: #384F4B;">Email Us</div>
          <div style="font-size: 14px; font-family: Roboto, sans-serif; color: #444444;">info@example.com</div>
          <div style="font-size: 14px; font-family: Roboto, sans-serif; color: #444444;">contact@example.com</div>
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