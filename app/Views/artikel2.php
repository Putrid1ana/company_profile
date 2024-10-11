<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Susu Minuman Sehat Kaya Manfaat dan Berkah</title>

     <!-- Meta Tags -->
  <meta name="title" content="Susu Minuman Sehat Kaya Manfaat dan Berkah">
  <meta name="description" content="Susu adalah minuman sehat yang kaya akan manfaat dan berkah. Temukan manfaat susu dalam menjaga kesehatan tubuh, meningkatkan energi, dan mendukung gaya hidup sehat.">

  <!-- Canonical Tag -->
  <link rel="canonical" href="<?= current_url() ?>">

  <style>
    /* Navbar */
    .navbar {
      width: 100%;
      max-width: none;
      height: 75px;
      padding: 13px 20px;
      background: white;
      box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      z-index: 100;
    }

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
      margin-left: auto; /* Gambar akan berada di sebelah kanan */
      display: block;
    }

    /* Footer */
    .footer {
      width: 100%;
      height: 98px;
      background: black;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      box-sizing: border-box;
      border-top: 1px solid rgba(255, 255, 255, 0.17);
      position: relative;
      bottom: 0;
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
      /* Navbar */
      .navbar {
        height: auto;
        padding: 10px 20px;
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }

      .navbar div {
        font-size: 24px;
      }

      /* Banner */
      .banner-title {
        font-size: 32px;
      }

      /* Content */
      .tentang-kami-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
        margin-top: 20px;
      }

      .tentang-kami-content p {
        font-size: 18px;
      }

      .tentang-kami-content img {
        max-width: 300px;
        height: auto;
        margin-left: 0; /* Kembali ke tengah pada layar kecil */
        margin-right: 0;
      }

      /* Footer */
      .footer {
        flex-direction: column;
        height: auto;
        gap: 10px;
        padding: 10px;
        text-align: center;
      }
    }

    @media (max-width: 480px) {
      /* Reduce font sizes for very small screens */
      .banner-title {
        font-size: 24px;
      }

      .tentang-kami-content p {
        font-size: 16px;
      }

      .section-title h1 {
        font-size: 24px;
      }
    }
  </style>
</head>

<body style="margin: 0px;">
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
        <div class="navbar">
    <div style="font-size: 30px; font-family: Roboto; font-weight: 700;">Healthy Milk</div>
    <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
      <a href="/" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Beranda</a>
      <a href="/tentang" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Tentang</a>
      <a href="/artikel" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Artikel</a>
      <a href="/produk" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Produk</a>
      <a href="/aktivitas" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Aktivitas</a>
      <a href="/kontak" style="text-decoration: none; color: black; font-size: 16px; font-family: Poppins;">Kontak</a>
      <div>
        <select style="padding: 5px; font-family: Inika; font-size: 16px; margin-right: 28px;">
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
                }

                div[style*="font-size: 16px;"] {
                    font-size: 14px;
                }

                div[style*="flex-wrap: wrap;"] {
                    flex-direction: column;
                    gap: 10px;
                }

                div[style*="height: 75px;"] {
                    height: auto;
                }
            }
        </style>


        <!-- Content Section -->
        <div style="display: flex; justify-content: space-between; width: 90%; padding: 20px; background: white;">
            <!-- Artikel Utama -->
            <div style="flex: 2; padding-right: 20px;">
                <img style="width: 100%; height: auto; border: 5px #A6D4FF solid;"  alt="susu minum sehat" src="/articel/artikel11.jpg" />
                <div style="padding: 20px; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 5px #A6D4FF solid; margin-top: 20px;">
                    <div style="color: black; font-size: 14px; font-family: Inika; font-weight: 400;">
                    24 Juni 2024
                    </div>
                    <div style="color: black; font-size: 32px; font-family: Roboto; font-weight: 700; margin-top: 10px;">
                    SUSU MINUMAN SEHAT KAYA MANFAAT DAN BERKAH NAMUN KURANG PEMINAT
                    </div>
                    <div style="color: black; font-size: 16px; font-family: Times New Roman; font-weight: 400; margin-top: 20px; line-height: 1.6;">
                        <br>Susu…Hampir semua orang mengenal susu. Bahkan bagi masyarakat  Indonesia susu telah menjadi slogan pola makan sehat sejak dahulu kala yang dikenal dengan istilah “4 sehat 5 sempurna”.  Dimana komposisi 4 sehat meliputi : Makanan Pokok, Lauk Pauk, Sayur dan Buah, dan dianggap sempurna apabila ditambahkan yang ke-5, yaitu susu. Artinya dalam makanan kita sehari-hari sudah sehat tetapi belum sempurna sebelum ada tambahan susu. Pengertian lain dari sempurna ini adalah bahwa susu itu sendiri sudah sempurna meskipun sendirian. </br>

                <br> Apabila kita kaitkan dengan ilmu gizi saat ini istilah tersebut sangat sesuai. Untuk golongan rawan yang sedang menjalani masa pertumbuhan seperti anak balita, anak sekolah, remaja dan  ibu hamil yang didalam tubuhnya sedang ada pertumbuhan janin, serta ibu menyusui yang memproduksi ASI untuk pertumbuhan anaknya, tambahan konsumsi susu dalam makanan mereka sehari-hari sangat-sangat dianjurkan agar tercukupi semua unsur gizi yang dibutuhkan untuk pertumbuhan sehingga tercapai pertumbuhan yang optimal. Dan bagi lansia susu perlu ditambahkan sebagai penyempurna makanan untuk menopang tulangnya agar tidak keropos.  Adapun bagi bayi usia 0-6 bulan susu (ASI) sudah sempurna sendirian, sehingga bayi tidak perlu diberikan makanan atau minuman tambahan lain selama 6 bulan pertama kehidupannya yang dikenal dengan istilah ASI Eksklusif. Karena penambahan selain ASI akan mengurangi jumlah ASI yang dapat diminum oleh bayi.</br>

<br> Susu adalah cairan bergizi berwarna putih yang dihasilkan oleh kelenjar susu mamalia. Secara alami susu mengandung semua zat gizi penting yang diperlukan oleh tubuh yaitu protein, berbagai macam vitamin, berbagai mineral penting untuk pertumbuhan  serta lemak dan Karbohidrat. </br>
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
                    <a href="<?= base_url('artikel/minum-susu-sehat-itu-penting') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="susu minuman sehari-hari" src="<?= base_url('articel/artikel1.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">24 Agustus 2024</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Mengapa Minum Susu Penting Untuk Kesehatan....</div>
                            </div>
                        </div>
                    </a>

                    <hr style="border: 1px solid #A6D4FF;">

                    <!-- Artikel 2 -->
                    <a href="<?= base_url('artikel/inilah-manfaat-susu-murni-beserta-efek-sampingnya') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="susu murni kaya manfaat" src="<?= base_url('articel/artikel3.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">31 Desember 2022</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Inilah Manfaat Susu Murni Beserta Efek Sampingnya...</div>
                            </div>
                        </div>
                    </a>

                    <hr style="border: 1px solid #A6D4FF;">

                    <!-- Artikel 3 -->
                    <a href="<?= base_url('artikel/potensi-olahan-susu-sapi-perah-sebagai-bahan-pangan') ?>" style="text-decoration: none; color: inherit;">
                        <div style="display: flex; gap: 15px; margin-top: 20px;">
                            <img style="width: 147px; height: auto;" alt="olahan susu Sapi" src="<?= base_url('articel/artikel4.jpg.png') ?>" />
                            <div>
                                <div style="font-size: 14px; color: black; margin-bottom: 8px;">08 Agustus 2023</div>
                                <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Potensi Olahan Susu Sapi Perah sebagai Bahan Pangan....</div>
                            </div>
                        </div>
                    </a>
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
                <div style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.17); border-radius: 16px; display: flex; justify-content: center; align-items: center;">
                    <a href="https://instagram.com" target="_blank" style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; color: white;">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div style="color: white; font-size: 13px; font-family: DM Sans;">Copyright © 2024 Healthy Milk, Design By Healthy Milk</div>
        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </div>
</body>

</html>