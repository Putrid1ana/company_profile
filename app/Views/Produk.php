<?= $this->extend('Layout/layout') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="/css/produk.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="banner">
      <img src="/product/produk3.jpg" alt="Background Image">
      <div class="banner-overlay">
        <h1 class="banner-title">Produk Healthy Milk</h1>
      </div>
    </div>

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
            <a href="<?= base_url('produk/' . esc($produk['slug'])); ?>" style="position: absolute; bottom: -10px; left: 0; width: 100%; background-color: #A6D4FF; text-align: center; color: black; font-size: 24px; padding: 10px 0; border-radius: 20px 20px 0 0; text-decoration: none; border-top: 3px solid white;">
              <?= esc($produk['nama_produk_in']); ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <?= $this->endSection() ?>