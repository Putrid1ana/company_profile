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
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">

  <!-- Link untuk FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

    /* Container utama */
.artikel-container {
  width: 100%;
  height: auto;
  padding: 40px 0;
  background: linear-gradient(234deg, #A6D4FF 0%, white 40%, rgba(178, 218, 255, 0.09) 96%);
  display: flex;
  flex-direction: row; /* Mengubah dari column ke row */
  align-items: flex-start; /* Menyelaraskan item di bagian atas */
  flex-wrap: wrap; /* Memungkinkan item berpindah ke baris berikutnya */
  gap: 16px; /* Ruang antara item */
  justify-content: center; /* Menyelaraskan item di tengah */
}

    /* Heading */
    .heading-container {
      width: 100%; /* Pastikan kontainer mengambil lebar penuh */
  display: flex; /* Menggunakan flexbox untuk tata letak */
  justify-content: center; /* Menyelaraskan konten di tengah */
  margin-top: 20px; /* Jarak atas jika diperlukan */
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
      flex: 1 1 calc(25% - 16px); /* Atau sesuaikan lebar sesuai kebutuhan */
      max-width: 270px; /* Pastikan batas maksimum untuk kartu */
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


    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
      /* Banner */
      .banner-title {
        font-size: 24px;
      }

      /* Responsiveness for Article Cards */
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

    }
  </style>
</head>

<body style="margin: 0px;">

  <!-- Navbar Section -->
  <nav class="navbar">
    <div class="logo" id="logo">Healthy Milk</div>
    <ul class="nav-links">
      <li><a href="/" class="nav-item" data-id="home">Beranda</a></li>
      <li><a href="/tentang" class="nav-item" data-id="about">Tentang</a></li>
      <li><a href="/artikel" class="nav-item" data-id="articles">Artikel</a></li>
      <li><a href="/produk" class="nav-item" data-id="products">Produk</a></li>
      <li><a href="/aktivitas" class="nav-item" data-id="activities">Aktivitas</a></li>
      <li><a href="/kontak" class="nav-item" data-id="contact">Kontak</a></li>
      <li>
        <select id="language-select" style="padding: 5px; font-family: Inika; font-size: 16px; margin-right: 28px;">
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

  <!-- Banner Section -->
  <div class="banner">
    <img src="/articel/artikel.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Artikel Healthy Milk</h1>
    </div>
  </div>

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
        <a href="<?= base_url('artikel/minum-susu-sehat-itu-penting') ?>">
          <div class="artikel-content">
            <div class="artikel-inner">
              <img class="artikel-image" alt="meminum susu" src="/articel/<?= esc($artikel['foto_artikel']) ?>" />
              <div class="artikel-title"><?= $artikel['judul_artikel'] ?></div>
              <div class="artikel-description"><?= substr($artikel['deskripsi_artikel'], 0, 100) ?>...<br /><?= date('d F Y', strtotime($artikel['created_at'])) ?></div>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>

  </div>

  <?php include 'Partials/footer.php'; ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</body>


</html>