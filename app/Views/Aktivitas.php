<?= $this->extend('Layout/layout') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="/css/aktivitas.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="banner">
    <img src="/articel/artikel.jpg" alt="Healthy Milk Banner" />
    <div class="banner-overlay">
      <h1 class="banner-title">Aktivitas Healthy Milk</h1>
    </div>
  </div>

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

  <?= $this->endSection() ?>
