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
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">
  
  <!-- Link untuk FontAwesome -->
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

      .logo {
        font-size: 20px;
      }

      /* Navbar */
      .nav-links {
        position: absolute;
        right: 0;
        top: 0;
        background-color: #FFFF;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 350px;
        clip-path: circle(0px at 100% 0%);
        transition: clip-path 0.5s ease-in-out;
        padding-top: 50px;
        z-index: 1000;
      }

      .nav-links.open {
        clip-path: circle(100% at 50% 50%);
      }

      .nav-links li {
        margin: 10px 0;
      }

      .hamburger {
        display: block;

      }

      /* Banner */
      .banner-title {
        font-size: 24px;
      }

      .activity-container {
        flex-direction: column;
      }

      .activity-card {
        width: calc(100% - 24px);
        max-width: 100%;
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
    <img src="/articel/artikel.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Aktivitas Healthy Milk</h1>
    </div>
  </div>

  <!-- Main Content Section -->
  <div style="width: 100%; height: auto; padding: 40px 0; background: linear-gradient(234deg, #A6D4FF 0%, white 40%, rgba(178, 218, 255, 0.09) 96%); display: flex; flex-direction: column; align-items: center;">
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
          <a href="<?= base_url('aktivitas/' . $aktivitas['nama_aktivitas_in']) ?>" style="text-decoration: none; color: inherit;">
            <img src="/aktifitas/<?= esc($aktivitas['foto_aktivitas']) ?>" alt="menuang susu" style="width: 100%; height: 220px;">
            <div style="padding: 24px; text-align: center;">
              <h3 style="font-size: 24px; font-weight: 700;"><?= esc($aktivitas['nama_aktivitas_in']); ?></h3>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php include 'Partials/footer.php'; ?>

</body>

</html>