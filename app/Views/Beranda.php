<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Beranda</title>
  <!-- Meta Tags -->
  <meta name="title" content="Beranda">
  <meta name="description" content="Selamat datang di Beranda Healthy Milk, tempat Anda bisa menemukan informasi terbaru seputar produk susu sehat, manfaatnya, dan tips gaya hidup sehat.">

  <!-- Canonical Tag -->
  <link rel="canonical" href="<?= current_url() ?>">
</head>

<body>
  <!-- Main Wrapper -->
  <div style="width: 100%; background: white; display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-start;">

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

    <!-- Main Content Section -->
    <div style="width: 100%; max-width: none; margin-top: 100px; display: flex; justify-content: center; align-items: center;">
      <div style="width: 100%; height: 100vh; background-image: url('/profile.jpg'); background-size: cover; background-position: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div style="background: rgba(42, 43, 63, 0.75); padding: 40px; text-align: center; color: white; width: 90%; max-width: 800px;">
          <h1 style="font-size: 4vw; font-family: Roboto; font-weight: 700;">Welcome To My Healthy Milk</h1>
          <p style="font-size: 1.5vw; font-family: Poppins; font-style: italic;">Selamat datang di Healthy Milk, tempat terbaik untuk menemukan susu yang sehat dan berkualitas tinggi. Kami berdedikasi untuk menyediakan produk susu yang tidak hanya lezat tetapi juga mendukung gaya hidup sehat.</p>
          <a href="tentang" style="padding: 12px 34px; background: #0D6EFD; border-radius: 30px; color: white; text-decoration: none; font-family: Nunito; font-weight: 700;">Baca Selengkapnya</a>
        </div>
      </div>
    </div>

    <div style="display: flex; justify-content: center; gap: 20px; padding: 20px; max-width: 1440px; margin: 0 auto; height: 376px; align-items: flex-start;">
      <!-- Card 1 -->
      <div style="width: 464px; height: 300px; background: white; box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.10); border-radius: 14px; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative;">
        <div style="width: 77px; height: 77px; background: #01579B; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
          <div style="width: 35px; height: 35px; background: white;"></div>
        </div>
        <div style="text-align: center; color: #01579B; font-size: 20px; font-family: Nunito; font-weight: 600; margin-top: 10px;">
          Local Farmer
        </div>
        <div style="text-align: center; color: #797A8C; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 22.4px; margin-top: 10px;">
          Tortor arcu rutrum maecenas viverra<br />tincidunt justo. Tempor dictumst mi augue<br />rutrum sagittis dis habitant condimentum.
        </div>
      </div>

      <!-- Card 2 -->
      <div style="width: 464px; height: 300px; background: #01579B; border-radius: 14px; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative;">
        <div style="width: 77px; height: 77px; background: white; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
          <div style="width: 29.77px; height: 26.25px; background: #01579B;"></div>
        </div>
        <div style="text-align: center; color: white; font-size: 20px; font-family: Nunito; font-weight: 600; margin-top: 10px;">
          Dairy Product
        </div>
        <div style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 22.4px; margin-top: 10px;">
          Tortor arcu rutrum maecenas viverra<br />tincidunt justo. Tempor dictumst mi augue<br />rutrum sagittis dis habitant condimentum.
        </div>
      </div>

      <!-- Card 3 -->
      <div style="width: 464px; height: 300px; background: white; box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.10); border-radius: 14px; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative;">
        <div style="width: 77px; height: 77px; background: #01579B; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
          <div style="width: 33.26px; height: 33.26px; background: white;"></div>
        </div>
        <div style="text-align: center; color: #01579B; font-size: 20px; font-family: Nunito; font-weight: 600; margin-top: 10px;">
          Tour Destination
        </div>
        <div style="text-align: center; color: #797A8C; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 22.4px; margin-top: 10px;">
          Tortor arcu rutrum maecenas viverra<br />tincidunt justo. Tempor dictumst mi augue<br />rutrum sagittis dis habitant condimentum.
        </div>
      </div>
    </div>

    <div style="align-self: stretch; height: 235px; padding-top: 36px; padding-bottom: 60px; padding-left: 300px; padding-right: 300px; background: #E1F5FE; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style="width: 100%; max-width: 1200px; height: auto; display: flex; flex-direction: column; align-items: center;">
        <div style="align-self: stretch; justify-content: center; align-items: center; display: flex; flex-direction: column;">
          <div style="align-self: stretch; height: 199px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: center; display: flex">
            <div style="width: 1296px; height: 157px; position: relative; display: flex; justify-content: center; align-items: center;">
              <div style="height: 44px; width: 44px; display: flex; justify-content: center; align-items: center; border-radius: 50%; margin-right: 70%;">
                <!-- Ikon senyum -->
                <span style="color: white; font-size: 24px;">😊</span>
              </div>
              <div style="position: absolute; height: 109px;">
                <div style="position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #01579B; font-size: 48px; font-family: Roboto; font-weight: 700; line-height: 40px; text-align: center; word-wrap: break-word;">
                  Love Healthy Milk & Love You More
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                  <img style="width: 160.75px; height: 80px" alt="meminum susu" src="<?= base_url('articel/artikel1.jpg.png') ?>" />
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
                  <img style="width: 142.70px; height: 80px" alt="susu sapi" src="<?= base_url('articel/artikel2.jpg.png') ?>" />
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
                  <img style="width: 119.91px; height: 80px" alt="susu sereal" src="<?= base_url('articel/artikel3.jpg.png') ?>" />
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
                  <img style="width: 135.30px; height: 80px" alt="susu putih" src="<?= base_url('articel/artikel4.jpg.png') ?>" />
                  <div style="color: #384F4B; font-size: 10px; font-family: Inter; font-weight: 700; text-decoration: underline; line-height: 24px; word-wrap: break-word">Potensi Olahan Susu Sapi Perah sebagai Bahan Pangan</div>
                  <div style="color: #444444; font-size: 8px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Susu sapi dan produk susu merupakan bahan makanan yang sangat bermanfaat...<br />8 Agustus 2023</div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div style="width: 90%; max-width: none; background: linear-gradient(235deg, rgba(205, 238, 248, 0) 4%, white 50%, #A6D4FF 95%); display: flex; flex-direction: column; padding: 60px 5%; box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.10);">
      <div style="height: 98.39px; padding-bottom: 60px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
        <div style="align-self: stretch; height: 38.39px; padding-bottom: 1.39px; justify-content: center; align-items: center; gap: 15px; display: inline-flex">
          <div style="width: 50px; height: 2px; background: #1BBCA3"></div>
          <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter; font-weight: 700; line-height: 38.40px;">Galeri Produk</div>
          <div style="width: 50px; height: 2px; background: #1BBCA3"></div>
        </div>
      </div>
      <div style="height: 436px; justify-content: flex-end; align-items: center; display: flex; flex-wrap: wrap; gap: 20px; padding: 0 150px;">
        <div style="width: 353px; height: 436px; border-radius: 8px; border: 1px #E0E0E0 solid; display: flex; flex-direction: column; padding: 10px;">
          <div style="width: 40px; height: 40px; justify-content: center; align-items: center; display: inline-flex">
            <div style="flex: 1; padding-top: 8.04px; padding-bottom: 9.17px; padding-left: 5px; padding-right: 5.28px; justify-content: center; align-items: center; display: inline-flex">
              <div style="width: 29.72px; height: 22.79px; background: #121212"></div>
            </div>
          </div>
          <div style="flex: 1; color: black; font-size: 12px; font-family: Roboto; font-weight: 400; line-height: 30px;">
            <span>Minuman Greenfields adalah produk susu dan turunan susu yang diproduksi oleh PT Greenfields Indonesia, seperti susu pasteurisasi, susu UHT, yogurt, keju, dan whipping cream.<br /></span>
            <span>Susu segar Greenfields <br />Yogurt Greenfields</span>
          </div>
          <div style="width: 64px; height: 64px; border-radius: 32px; overflow: hidden; background-image: url('<?= base_url('galeri/galeri.jpg.png') ?>'); justify-content: center; align-items: center; display: inline-flex">
            <img style="width: 64px; height: 64px" alt="susu Greenfields"src="<?= base_url('galeri/galeri.jpg.png') ?>" />
          </div>
          <div style="color: #333333; font-size: 16px; font-family: Roboto; font-weight: 700; line-height: 24px;">Greenfields</div>
        </div>

        <div style="width: 353px; height: 436px; border-radius: 8px; border: 1px #E0E0E0 solid; display: flex; flex-direction: column; padding: 10px;">
          <div style="width: 40px; height: 40px; justify-content: center; align-items: center; display: inline-flex">
            <div style="flex: 1; padding-top: 8.04px; padding-bottom: 9.17px; padding-left: 5px; padding-right: 5.28px; justify-content: center; align-items: center; display: inline-flex">
              <div style="width: 29.72px; height: 22.79px; background: #121212"></div>
            </div>
          </div>
          <div style="flex: 1; color: black; font-size: 13px; font-family: Roboto; font-weight: 400; line-height: 30px;">
            <span>Minuman Ichitan adalah minuman siap saji yang diproduksi oleh PT Ichi Tan Indonesia. Ichitan menawarkan berbagai jenis minuman, seperti: <br /></span>
            <span>Ichitan Brown Sugar Milk<br />Ichitan Thai Milk Green Tea<br />Ichitan Korean Milk</span>
          </div>
          <div style="width: 64px; height: 64px; border-radius: 32px; overflow: hidden; background-image: url('<?= base_url('galeri/galeri1.jpg.png') ?>'); justify-content: center; align-items: center; display: inline-flex">
            <img style="width: 64px; height: 64px" alt="susu Ichitan" src="<?= base_url('galeri/galeri1.jpg.png') ?>" />
          </div>
          <div style="color: #333333; font-size: 16px; font-family: Roboto; font-weight: 700; line-height: 24px;">ICHITAN</div>
        </div>

        <div style="width: 353px; height: 436px; border-radius: 8px; border: 1px #E0E0E0 solid; display: flex; flex-direction: column; padding: 10px;">
          <div style="width: 40px; height: 40px; justify-content: center; align-items: center; display: inline-flex">
            <div style="flex: 1; padding-top: 8.04px; padding-bottom: 9.17px; padding-left: 5px; padding-right: 5.28px; justify-content: center; align-items: center; display: inline-flex">
              <div style="width: 29.72px; height: 22.79px; background: #121212"></div>
            </div>
          </div>
          <div style="flex: 1; color: black; font-size: 13px; font-family: Roboto; font-weight: 400; line-height: 30px;">
            <span>Silk Nextmilk adalah susu nabati yang terbuat dari campuran gandum, kelapa, dan kedelai. Susu ini memiliki rasa, komponen nutrisi, dan komposisi molekuler yang mirip dengan susu sapi. Silk Nextmilk dirancang untuk menarik orang yang ingin beralih dari susu sapi ke susu nabati.</span>
          </div>
          <div style="width: 64px; height: 64px; border-radius: 32px; overflow: hidden; background-image: url('<?= base_url('galeri/galeri2.jpg.png') ?>'); justify-content: center; align-items: center; display: inline-flex">
            <img style="width: 64px; height: 64px" alt="susu Silk NextMilk" src="<?= base_url('galeri/galeri2.jpg.png') ?>" />
          </div>
          <div style="color: black; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px;">Silk NextMilk</div>
        </div>

        <div style="width: 353px; height: 436px; border-radius: 8px; border: 1px #E0E0E0 solid; display: flex; flex-direction: column; padding: 10px;">
          <div style="width: 40px; height: 40px; justify-content: center; align-items: center; display: inline-flex">
            <div style="flex: 1; padding-top: 8.04px; padding-bottom: 9.17px; padding-left: 5px; padding-right: 5.28px; justify-content: center; align-items: center; display: inline-flex">
              <div style="width: 29.72px; height: 22.79px; background: #121212"></div>
            </div>
          </div>
          <div style="flex: 1; color: black; font-size: 12px; font-family: Roboto; font-weight: 400; line-height: 30px;">
            <span>Ultra Milk adalah merek susu yang diproduksi oleh PT Ultrajaya Milk Industri Tbk. Ultra Milk merupakan susu segar alami yang diproses dengan teknologi Ultra High Temperature (UHT). Susu Ultra Milk mengandung berbagai nutrisi, seperti protein, karbohidrat, vitamin, dan mineral seperti kalsium, magnesium, dan fosfor.</span>
          </div>
          <div style="width: 64px; height: 64px; border-radius: 32px; overflow: hidden; background-image: url('<?= base_url('galeri/galeri3.jpg.png') ?>'); justify-content: center; align-items: center; display: inline-flex">
            <img style="width: 64px; height: 64px" alt="susu ultramilk" src="<?= base_url('galeri/galeri3.jpg.png') ?>" />
          </div>
          <div style="color: black; font-size: 16px; font-family: Roboto; font-weight: 700; line-height: 24px;">Ultra Milk</div>
        </div>
      </div>
    </div>


    <!-- Main Content Section -->
    <div style=" width: 64%; align-self: stretch; height: 778px; padding-left: 300px; padding-right: 300px; padding-top: 60px; padding-bottom: 60px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style="height: 98.39px; padding-bottom: 60px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
        <div style="align-self: stretch; height: 38.39px; padding-bottom: 1.39px; padding-left: 470.22px; padding-right: 470.23px; justify-content: flex-start; align-items: center; gap: 15px; display: inline-flex">
          <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
          <div style="text-align: center; color: #384F4B; font-size: 32px; font-family: Inter; font-weight: 700; line-height: 38.40px; word-wrap: break-word">Aktivitas</div>
          <div style="width: 50px; height: 2px; background: #1F9CF7"></div>
        </div>
      </div>
      <div style="height: 491.80px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
        <div style="align-self: stretch; justify-content: center; align-items: flex-start; display: inline-flex">
          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas1') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 416px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 30px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 26.14px; padding-right: 26.14px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Penyajian Milk</div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 30px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 24.14px; padding-right: 24.16px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Eum ad dolor et. Autem aut fugiat debitis<br />voluptatem consequuntur sit. Et veritatis id.</div>
                  </div>
                </div>
                <img style="width: 391.79px; height: 220px; left: 12px; top: 36.46px; position: absolute" alt="menuang susu" src="/aktifitas/ultramilk.jpg.png" />
              </div>
            </a>
          </div>
          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas2') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 416px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 30px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 10.61px; padding-right: 10.62px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Pemindahan Milk</div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 30px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 22.97px; padding-right: 22.97px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Repudiandae amet nihil natus in distinctio<br />suscipit id. Doloremque ducimus ea sit non.</div>
                  </div>
                </div>
                <img style="width: 391.11px; height: 220px; left: 12px; top: 39.46px; position: absolute" alt="susu kacang" src="/aktifitas/aktivitas.jpg.png" />
              </div>
            </a>
          </div>
          <div style="flex: 1 1 0; height: 491.80px; padding-top: 24px; padding-left: 12px; padding-right: 12px; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
            <a href="<?= base_url('aktivitas3') ?>" style="text-decoration: none; color: inherit;">
              <div style="width: 416px; height: 467.80px; position: relative; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10); border-radius: 6px">
                <div style="height: 77px; padding-top: 29.10px; padding-bottom: 18px; left: 30px; top: 297px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 29.90px; padding-bottom: 0.90px; padding-left: 17.59px; padding-right: 17.60px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #384F4B; font-size: 24px; font-family: Inter; font-weight: 700; line-height: 28.80px; word-wrap: break-word">Peternakan </div>
                  </div>
                </div>
                <div style="height: 88px; padding-bottom: 16px; left: 30px; top: 373.79px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                  <div style="align-self: stretch; height: 72px; padding-left: 11.27px; padding-right: 11.27px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; line-height: 24px; word-wrap: break-word">Consequuntur aliquid ab incidunt. Ex quos qui et vero et aut in. Reprehenderit.</div>
                  </div>
                </div>
                <img style="width: 392.47px; height: 220px; left: 12px; top: 41.46px; position: absolute" alt="susu sapi putih" src="/aktifitas/aktivitas2.jpg.png" />
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div style="width: 100%; background: #01579B; padding: 40px 20px; box-sizing: border-box;">
      <div style="max-width: 1320px; margin: 0 auto; display: flex; justify-content: space-between; align-items: flex-start; gap: 30px;">

        <!-- Company Column -->
        <div style="flex: 1; color: white;">
          <div style="margin-bottom: 20px;">
            <div style="font-size: 18px; font-family: Roboto; font-weight: 500;">Company</div>
            <div style="width: 50px; height: 3px; background: rgba(178, 218, 255, 0.90);"></div>
          </div>
          <ul style="list-style: none; padding: 0; margin: 0; line-height: 1.8;">
            <li><a href="#" style="color: white; text-decoration: none;">Tentang</a></li>
            <li><a href="#" style="color: white; text-decoration: none;">Artikel</a></li>
            <li><a href="#" style="color: white; text-decoration: none;">Produk</a></li>
            <li><a href="#" style="color: white; text-decoration: none;">Aktivitas</a></li>
            <li><a href="#" style="color: white; text-decoration: none;">Contact</a></li>
          </ul>
        </div>

        <!-- Contacts Column -->
        <div style="flex: 1; color: white;">
          <div style="margin-bottom: 20px;">
            <div style="font-size: 18px; font-family: Roboto; font-weight: 500;">Contacts</div>
            <div style="width: 50px; height: 3px; background: rgba(178, 218, 255, 0.90);"></div>
          </div>
          <ul style="list-style: none; padding: 0; margin: 0; line-height: 1.8;">
            <li>📍 Location:</li>
            <li>59 Street, New York City</li>
            <li>📞 Call Us:</li>
            <li>+2123 5900036</li>
            <li>✉️ Mail Us:</li>
            <li>info@gmail.com</li>
          </ul>
        </div>

        <!-- Newsletter Column -->
        <div style="flex: 1; color: white;">
          <div style="margin-bottom: 20px;">
            <div style="font-size: 18px; font-family: Roboto; font-weight: 500;">Newsletter</div>
            <div style="width: 50px; height: 3px; background: rgba(178, 218, 255, 0.90);"></div>
          </div>
          <p style="line-height: 1.8;">Fusce varius, dolor tempor interdum tristique bibendum</p>
          <form>
            <input type="email" placeholder="E-mail" style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">
            <button type="submit" style="background: #0277BD; color: white; padding: 10px 20px; border: none; cursor: pointer;">Subscribe Now</button>
          </form>
        </div>
      </div>

      <!-- Wave Image -->
      <div style="width: 100%; height: 100px; background: url('wave.png') no-repeat center center; background-size: cover; margin-top: 20px;"></div>
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
      <div style="color: white; font-size: 13px; font-family: DM Sans;">Copyright © 2024 Healthy Milk, Design by Healthy Milk</div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </div>
</body>

</html>