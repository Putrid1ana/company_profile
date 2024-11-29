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
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">

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
      flex-direction: column;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: space-between;
    }

    /* Heading */
    .heading-container {
      text-align: center;
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

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {

      /* Banner */
      .banner-title {
        font-size: 24px;
      }

      div[style*="display: flex; justify-content: space-between;"] {
        flex-direction: column;
        width: 100%;
        padding: 10px;
      }

      div[style*="flex: 2; padding-right: 20px;"] {
        padding-right: 0;
        margin-bottom: 20px;
      }

      div[style*="flex: 1;"] {
        margin-top: 0;
      }
    }
  </style>
</head>

<body style="margin: 0px;">

  <!-- Banner Section -->
  <div class="banner">
    <img src="/articel/artikel.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Artikel Healthy Milk</h1>
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

  <!-- Content Section -->
  <div style="display: flex; justify-content: space-between; width: 90%; padding: 20px; background: white;">
    <!-- Artikel Utama -->
    <div style="flex: 2; padding-right: 20px;">
     <!-- Gambar Artikel Utama -->
<img style="width: 100%; height: auto; border: 5px #A6D4FF solid;" 
     alt="<?= esc($artikel['judul_artikel']) ?>" 
     src="<?= base_url('articel/' . esc($artikel['foto_artikel'])) ?>" />

      <div style="padding: 20px; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 5px #A6D4FF solid; margin-top: 20px;">
      <div style="color: black; font-size: 14px; font-family: Inika; font-weight: 400;">
    <?= date('d F Y', strtotime($artikel['created_at'])) ?>
    </div>
    <div style="color: black; font-size: 32px; font-family: Roboto; font-weight: 700; margin-top: 10px;">
        <?= esc($artikel['judul_artikel']) ?>
    </div>
    <div style="color: black; font-size: 16px; font-family: Times New Roman; font-weight: 400; margin-top: 20px; line-height: 1.6;">
    <?php 
    // Memecah deskripsi menjadi array paragraf berdasarkan baris baru
    $paragraf = explode("\n", $artikel['deskripsi_artikel']); 
    foreach ($paragraf as $p): 
        if (trim($p)): // Memastikan tidak ada paragraf kosong
    ?>
        <p style="text-indent: 2em; margin-top: 10px;">
            <?= esc($p) ?>
        </p>
    <?php 
        endif;
    endforeach; 
    ?>
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
        <?php foreach ($referensiLainnya as $ref): ?>
          <a href="<?= base_url('artikel/' . $ref['slug']) ?>" style="text-decoration: none; color: inherit;">
          <div style="display: flex; gap: 15px; margin-top: 20px;">
          <img style="width: 147px; height: auto;" 
                 alt="<?= esc($ref['judul_artikel']) ?>" 
                 src="<?= base_url('articel/' . esc($ref['foto_artikel'])) ?>" />
            <div>
            <div style="font-size: 14px; color: black; margin-bottom: 8px;">
                    <?= date('d F Y', strtotime($ref['created_at'])) ?>
                </div>
                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">
                    <?= esc($ref['judul_artikel']) ?>
                </div>
            </div>
          </div>
        </a>
     

        <hr style="border: 1px solid #A6D4FF;">
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <?php include 'Partials/footer.php'; ?>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</body>

</html>