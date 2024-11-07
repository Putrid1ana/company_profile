<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthy Milk-Produk</title>

  <!-- Meta Tags -->
  <meta name="title" content="Healthy Milk-Produk">
  <meta name="description" content="Healthy Milk menawarkan berbagai produk susu berkualitas tinggi yang mendukung gaya hidup sehat. Temukan pilihan susu terbaik untuk nutrisi harian Anda.">

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

    .product-container {
      flex-wrap: nowrap;
      /* Tetap satu baris di layar besar */
    }

    .product-item {
      width: 235px;
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
      /* Banner */
      .banner-title {
        font-size: 24px;
      }
    }
  </style>
</head>

<body style="margin: 0px;">
  <!-- Background Section -->
  <div style="width: 100%; height: 100vh; position: relative; background: conic-gradient(from 180deg at 0% 100%, #A6D4FF 307deg, #D4ECFD 360deg);">

    <!-- Banner Section -->
    <div class="banner">
      <img src="/product/produk3.jpg" alt="Background Image">
      <div class="banner-overlay">
        <h1 class="banner-title">Produk Healthy Milk</h1>
      </div>
    </div>

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

    <!-- Produk Section -->
    <div style="width: 100%; height: auto; padding: 40px 0; background: linear-gradient(234deg, #A6D4FF 0%, white 40%, rgba(178, 218, 255, 0.09) 96%); display: flex; flex-direction: column; align-items: center;">
      <div style="text-align: center; margin-bottom: 150px;">
        <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
          <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
          <div style="font-size: 32px; font-weight: 700; color: #384F4B;">Produk</div>
          <div style="width: 50px; height: 2px; background: #1BBCA3;"></div>
        </div>
      </div>

      <div class="product-container" style="width: 100%; display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
        <?php foreach ($produks as $produk): ?>
          <div class="product-item" style="position: relative; width: 235px; border-radius: 20px; overflow: hidden;">
            <img src="/product/<?= esc($produk['foto_produk']) ?>" alt="susu greenfields" style="width: 100%; border-radius: 20px;">
            <a href="<?= base_url('produk/' . esc($produk['nama_produk_in'])); ?>" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">
              <?= esc($produk['nama_produk_in']); ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    
    <?php include 'Partials/footer.php'; ?>

</body>

</html>