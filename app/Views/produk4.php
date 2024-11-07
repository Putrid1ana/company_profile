<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ultramilk</title>

  <!-- Meta Tags -->
  <meta name="title" content="Ultramilk">
  <meta name="description" content="Ultramilk menghadirkan susu segar berkualitas tinggi dengan rasa lezat dan penuh gizi. Pilihan terbaik untuk kebutuhan nutrisi harian Anda dan keluarga.">

  <!-- Canonical Tag -->
  <link rel="canonical" href="<?= current_url() ?>">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
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
      display: block;
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {

      /* Banner */
      .banner-title {
        font-size: 24px;
      }

      /* Content */
      .tentang-kami-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
        margin-top: 20px;
      }

      .tentang-kami-content p {
        font-size: 16px;
        margin-bottom: 20px;
      }

      .tentang-kami-content img {
        max-width: 300px;
        height: auto;
        margin-left: 0;
        margin-right: 0;
      }
    }
  </style>
</head>

<body style="margin: 0px;">

   <!-- Navbar Section -->
   <?php include 'Partials/navbar-new.php'; ?>

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

  <!-- Banner Section -->
  <div class="banner">
    <img src="/product/produk14.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Produk Healthy Milk</h1>
    </div>
  </div>

  <!-- Tentang Kami Section -->
  <div style="max-width: none; min-height: 828px; background: linear-gradient(180deg, #A6D4FF 0%, white 21%); display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 60px 12px;">
    <!-- Section Title -->
    <div class="section-title">
      <div style="width: 50px; height: 2px; background: #1F9CF7;"></div>
      <h1>Ultramilk</h1>
      <div style="width: 50px; height: 2px; background: #1F9CF7;"></div>
    </div>

    <!-- Section Content with Image -->
    <div class="tentang-kami-content">
      <!-- Teks Konten -->
      <div>
        <p>Susu segar kami diproduksi dan disterilkan dalam proses Ultra High Temperature ( UHT ), dimana bahan baku di panaskan dalam suhu tinggi mencapai 140° C dalam waktu 4 detik, hal ini untuk mengeliminasi seluruh bakteri patogen. Waktu pemanasan yang singkat bertujuan untuk meminimalisir hilangnya kandungan nutrisi dan menjaga kesegarannya.</p>
        <p>Setelah secara proses produksi selesai, selanjutnya dikemas dalam kemasan yang terdiri dari 6 lapisan karton. Keenam lapisan karton ini terdiri dari lapisan polyethylene plastic, allumunium foil, dan kertas untuk melindungi dari sinar ultra violet, udara, dan bakteri yang mungkin akan mengkontaminasi susu.</p>
      </div>

      <!-- Gambar -->
      <div>
        <img src="/product/produkultra1.png" alt="Susu dan Croissant" />
      </div>
    </div>
  </div>

  <?php include 'Partials/footer.php'; ?>

</body>

</html>