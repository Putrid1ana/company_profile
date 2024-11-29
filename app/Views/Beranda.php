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
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">

  <!-- Link untuk FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <style>
    /* Container styling */
    .card-container {
      display: flex;
      overflow-x: scroll;
      white-space: nowrap;
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    .card-container::-webkit-scrollbar {
      display: none;
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
      overflow-wrap: break-word;
      word-wrap: break-word;
    }

    .card-content span {
      display: block;
      width: 100%;
      word-wrap: break-word;
      overflow-wrap: break-word;
      white-space: normal;
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

    /* Banner Section */
    .banner {
      width: 100%;
      height: 100vh;
      background-image: url('/profile.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .banner-content {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .banner-overlay {
      background: rgba(42, 43, 63, 0.75);
      padding: 40px;
      text-align: center;
      color: white;
      max-width: 800px;
    }

    .banner h1 {
      font-size: 4vw;
      font-family: Roboto;
      font-weight: 700;
      margin: 0;
    }

    .banner p {
      font-size: 1.5vw;
      font-family: Poppins;
      font-style: italic;
      margin: 20px 0;
    }

    .banner a {
      padding: 10px 34px;
      background: #0D6EFD;
      border-radius: 30px;
      color: white;
      text-decoration: none;
      font-family: Nunito;
      font-weight: 700;
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
      align-items: flex-start;
      flex-wrap: wrap;
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
      height: 35px;
      color: white;
      font-size: 36px;
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
      flex-direction: row;
      align-items: flex-start;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: center;
    }

    /* Heading */
    .heading-container {
      width: 100%;
      display: flex;
      justify-content: center;
      margin-top: 20px;
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
      margin: 8px;
      flex: 1 1 calc(25% - 16px);
      max-width: 270px;
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

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {

      /* Banner */
      .banner h1 {
        font-size: 8vw;
      }

      .banner p {
        font-size: 3.5vw;
        margin: 15px 0;
      }

      .banner a {
        padding: 8px 24px;
      }

      /* news */
      .news-item {
        width: calc(100% - 20px);
        height: auto;
        margin-bottom: 20px;
      }

      .icon-circle {
        width: 50px;
        height: 50px;
      }

      .title {
        font-size: 18px;
      }

      .description {
        font-size: 14px;
      }

      /* icon */
      div[style*="background: #E1F5FE"] {
        padding-left: 20px;
        padding-right: 20px;
      }

      div[style*="font-size: 48px;"] {
        font-size: 24px;
      }

      div[style*="margin-right: 20px;"] {
        margin-right: 10px;
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
      }

      .artikel-box {
        flex: 1 1 calc(33.33% - 16px);
      }

      /* galeri*/
      .card-container {
        flex-direction: column;
        align-items: center;
      }

      .card {
        width: 100%;
        margin-bottom: 20px;
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
        align-items: center;
        gap: 20px;
      }

      .footer-container>div {
        text-align: center;
      }
    }
  </style>
</head>

<body style="margin:0px;">

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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dy10ycQbDBOCJQ9exOYtxlLRSAfRdBr0CdA+cTrp29s0BdTgf9p6A8hqK1NlQRWEidL2daFFXZHMx9WzVHQjAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Banner Section -->
  <div class="banner">
    <div class="banner-content">
      <div class="banner-overlay">
        <h1>Welcome To My Healthy Milk</h1>
        <p>Selamat datang di Healthy Milk, tempat terbaik untuk menemukan susu yang sehat dan berkualitas tinggi. Kami berdedikasi untuk menyediakan produk susu yang tidak hanya lezat tetapi juga mendukung gaya hidup sehat.</p>
        <a href="tentang">Baca Selengkapnya</a>
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
    <?php foreach ($artikels as $artikel): ?>
    <div class="artikel-box">
    <a href="<?= base_url('artikel/' . esc($artikel['slug'])) ?>">

        <div class="artikel-content">
          <div class="artikel-inner">
            <img class="artikel-image" alt="meminum susu" src="/articel/<?= esc($artikel['foto_artikel']) ?>">
            <div class="artikel-title"><?= $artikel['judul_artikel'] ?></div>
            <div class="artikel-description"><?= substr($artikel['deskripsi_artikel'], 0, 100) ?>...<br><?= date('d F Y', strtotime($artikel['created_at'])) ?></div>
          </div>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
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
      <?php foreach ($products as $produk): ?>
        <div class="card">
          <div class="card-icon-container">
            <div class="card-icon"></div>
          </div>
          <div class="card-content">
            <?php
            $deskripsi_produk = $produk['deskripsi_produk_in'];
            $kata = explode(' ', $deskripsi_produk);
            $kata_terbatas = array_slice($kata, 0, 15);
            $deskripsi_terbatas = implode(' ', $kata_terbatas);
            ?>
            <span class="content-card"><?= trim($deskripsi_terbatas) . (count($kata) > 5 ? '...' : ''); ?></span>
          </div>
          <div class="card-footer">
            <img alt="susu Greenfields" src="/product/<?= esc($produk['foto_produk']) ?>" alt="susu greenfields" />
            <div><?= $produk['nama_produk_in'] ?></div>
          </div>
        </div>
      <?php endforeach; ?>

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

    <div class="activity-container" style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
      <?php foreach ($activities as $aktivitas): ?>
        <div class="activity-card" style="width: 235px; border-radius: 20px; overflow: hidden;">
          <a href="<?= base_url('aktivitas/' . $aktivitas['slug']) ?>" style="text-decoration: none; color: inherit;">
            <img src="/aktifitas/<?= esc($aktivitas['foto_aktivitas']) ?>" alt="menuang susu" style="width: 100%; height: 220px;">
            <div style="padding: 24px; text-align: center;">
              <h3 style="font-size: 24px; font-weight: 700;"><?= esc($aktivitas['nama_aktivitas_in']); ?></h3>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
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

  <?php include 'Partials/footer.php'; ?>

</body>

</html>