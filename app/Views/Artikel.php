<?= $this->extend('Layout/layout') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="/css/artikel.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="banner">
  <img src="/articel/artikel.jpg" alt="Healthy Milk Banner">
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

  <?php foreach ($artikels as $artikel): ?>
    <div class="artikel-box">
      <a href="<?= base_url('artikel/minum-susu-sehat-itu-penting') ?>">
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
<?= $this->endSection() ?>
