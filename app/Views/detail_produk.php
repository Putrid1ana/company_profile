<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenfields</title>

    <!-- Meta Tags -->
    <meta name="title" content="Greenfields">
    <meta name="description" content="Greenfields menyediakan susu segar berkualitas tinggi yang berasal dari peternakan sapi terbaik. Nikmati susu sehat dan lezat untuk menunjang gaya hidup yang lebih baik.">

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
    <img src="/product/produk11.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Produk Healthy Milk</h1>
    </div>
  </div>

  <!-- Tentang Kami Section -->
  <div style="max-width: none; min-height: 828px; background: linear-gradient(180deg, #A6D4FF 0%, white 21%); display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 60px 12px;">
    <!-- Section Title -->
    <div class="section-title">
      <div style="width: 50px; height: 2px; background: #1F9CF7;"></div>
      <h1><?= esc($produk['nama_produk_in']) ?></h1>
      <div style="width: 50px; height: 2px; background: #1F9CF7;"></div>
    </div>

    <!-- Section Content with Image -->
    <div class="tentang-kami-content">
      <!-- Teks Konten -->
      <div>
      <p><?= esc($produk['deskripsi_produk_in']) ?></p>
      </div>

      <!-- Gambar -->
      <div>
      <img src="/product/<?= esc($produk['foto_produk']) ?>" alt="Produk" />
      </div>
    </div>
  </div>

  <?php include 'Partials/footer.php'; ?>

</body>

</html>