<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthy Milk - Artikel</title>
  <!-- Tambahkan font, ikon, atau CSS eksternal jika diperlukan -->
</head>

<body>
  <!-- Background Section -->
  <div style="width: 100%; height: 100vh; position: relative; background: conic-gradient(from 180deg at 0% 100%, #A6D4FF 307deg, #D4ECFD 360deg);">

    <!-- Background Image Section -->
    <div style="width: 100%; height: 924px; background: #0E1A18; position: relative;">
      <img style="width: 100%; height: 924px; object-fit: cover;" src="/articel/artikel.jpg" alt="Background Image">
      <div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: rgba(14, 26, 24, 0.5);"></div>
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
        <h1 style="font-size: 48px; font-family: Roboto, sans-serif; font-weight: 700;">Artikel Healthy Milk</h1>
      </div>
    </div>

    <!-- Navbar Section -->
    <div style="width: 100%; max-width: 1440px; height: 75px; padding: 13px 184.49px; background: white; box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; align-items: center; position: fixed; top: 0; z-index: 100;">
      <div style="font-size: 30px; font-family: Roboto; font-weight: 700;">Healthy Milk</div>
      <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
        <a href="/" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Beranda</a>
        <a href="/tentang" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Tentang</a>
        <a href="/artikel" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Artikel</a>
        <a href="/produk" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Produk</a>
        <a href="/aktivitas" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Aktivitas</a>
        <a href="/kontak" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Kontak</a>
        <div style="display: flex; align-items: center; gap: 10px;">
          <select style="padding: 5px; font-family: Inika; font-size: 16px;">
            <option value="" hidden>Bahasa</option>
            <option value="id">Indonesia</option>
            <option value="en">English</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Media Query untuk tampilan mobile -->
    <style>
      @media (max-width: 768px) {
        div[style*="width: 100%;"] {
          padding-left: 20px;
          padding-right: 20px;
        }

        div[style*="font-size: 30px;"] {
          font-size: 24px;
          /* Logo lebih kecil di layar kecil */
        }

        div[style*="font-size: 16px;"] {
          font-size: 14px;
          /* Teks lebih kecil di layar kecil */
        }

        div[style*="flex-wrap: wrap;"] {
          flex-direction: column;
          /* Teks di navbar vertikal di layar kecil */
          gap: 10px;
        }

        div[style*="height: 75px;"] {
          height: auto;
          /* Agar navbar menyesuaikan tinggi konten di layar kecil */
        }
      }
    </style>

    <div style="align-self: stretch; height: 561px; padding-left: 150px; padding-right: 100px; padding-top: 60px; padding-bottom: 60px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style="height: 98.39px; padding-bottom: 60px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
        <div style="align-self: stretch; height: 38.39px; padding-bottom: 1.39px; justify-content: flex-start; align-items: center; gap: 15px; display: inline-flex">
          <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
          <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter; font-weight: 700; line-height: 38.40px; word-wrap: break-word">Artikel</div>
          <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
        </div>
      </div>
      <div style="width: 1320px; height: 397px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
        <div style="align-self: stretch; justify-content: center; align-items: flex-start; display: flex; gap: 24px;">
          <!-- Kotak Artikel -->
          <div style="width: 320px; height: 275px; padding-top: 24px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
            <a href="<?= base_url('artikel1') ?>" style=" text-decoration: none; color: inherit;">
              <div style="width: 100%; height: 251px; padding: 12px; justify-content: flex-start; align-items: flex-start; display: flex">
                <div style="width: 100%; padding: 30px; background: linear-gradient(180deg, #D5EBFF 0%, white 66%); box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                  <img style="width: 160.75px; height: 80px" src="<?= base_url('articel/artikel1.jpg.png') ?>" />
                  <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Mengapa Minum Susu Penting Untuk Kesehatan</div>
                  <div style="color: #444444; font-size: 8px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Susu juga dapat dijadikan salah satu cara untuk memperoleh hidup sehat....<br />24 Agustus 2024</div>
                </div>
              </div>
            </a>
          </div>
          <!-- Kotak Artikel Lainnya -->
          <div style="width: 320px; height: 275px; padding-top: 24px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
            <a href="<?= base_url('artikel2') ?>" style=" text-decoration: none; color: inherit;">
              <div style="width: 100%; height: 251px; padding: 12px; justify-content: flex-start; align-items: flex-start; display: flex">
                <div style="width: 100%; padding: 30px; background: linear-gradient(180deg, #D5EBFF 0%, white 66%); box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                  <img style="width: 142.70px; height: 80px" src="<?= base_url('articel/artikel2.jpg.png') ?>" />
                  <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Susu Minuman Sehat Kaya Manfaat dan Berkah</div>
                  <div style="color: #444444; font-size: 8px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Apabila kita kaitkan dengan ilmu gizi saat ini istilah tersebut sangat sesuai....<br />24 Juni 2024</div>
                </div>
              </div>
            </a>
          </div>
          <!-- Kotak Artikel Lainnya -->
          <div style="width: 320px; height: 275px; padding-top: 24px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
            <a href="<?= base_url('artikel3') ?>" style=" text-decoration: none; color: inherit;">
              <div style="width: 100%; height: 251px; padding: 12px; justify-content: flex-start; align-items: flex-start; display: flex">
                <div style="width: 100%; padding: 30px; background: linear-gradient(180deg, #D5EBFF 0%, white 66%); box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                  <img style="width: 119.91px; height: 80px" src="<?= base_url('articel/artikel3.jpg.png') ?>" />
                  <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Inilah Manfaat Susu Murni Beserta Efek Sampingnya</div>
                  <div style="color: #444444; font-size: 8px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Manfaat susu murni dapat diperoleh karena susu ini mengandung nutrisi.....<br /> 31 Desember 2022</div>
                </div>
              </div>
            </a>
          </div>
          <!-- Kotak Artikel Lainnya -->
          <div style="width: 320px; height: 275px; padding-top: 24px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
            <a href="<?= base_url('artikel4') ?>" style=" text-decoration: none; color: inherit;">
              <div style="width: 100%; height: 251px; padding: 12px; justify-content: flex-start; align-items: flex-start; display: flex">
                <div style="width: 100%; padding: 30px; background: linear-gradient(180deg, #D5EBFF 0%, white 66%); box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.10); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                  <img style="width: 135.30px; height: 80px" src="<?= base_url('articel/artikel4.jpg.png') ?>" />
                  <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Potensi Olahan Susu Sapi Perah sebagai Bahan Pangan</div>
                  <div style="color: #444444; font-size: 8px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Susu sapi dan produk susu merupakan bahan makanan yang sangat bermanfaat...<br />8 Agustus 2023</div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div style="width: 100%; height: 98px; background: black; display: flex; justify-content: space-between; align-items: center; padding: 0 20px; box-sizing: border-box; border-top: 1px solid rgba(255, 255, 255, 0.17); position: relative; bottom: 0;">
      <div style="display: flex; gap: 15px;">
        <!-- Icon Facebook -->
        <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
          <a href="https://facebook.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>

        <!-- Icon Twitter -->
        <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
          <a href="https://twitter.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
            <i class="fab fa-twitter"></i>
          </a>
        </div>

        <!-- Icon YouTube -->
        <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
          <a href="https://youtube.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
            <i class="fab fa-youtube"></i>
          </a>
        </div>

        <!-- Icon Instagram -->
        <!-- Icon Instagram -->
        <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
          <a href="https://instagram.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
      <div style="color: white; font-size: 13px; font-family: DM Sans;">Copyright © 2024 Healthy Milk, Design by Healthy Milk</div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </div>
</body>

</html>