<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!-- Link to Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
           html, body {
            height: 100vh; /* Mengambil tinggi penuh layar */
            overflow: hidden; /* Mencegah scroll bar muncul */
        }
          
         .banner {
            display: flex;
            justify-content: center;
            align-items: center;
    width: 100%;
    height: 550px;
    background: #0E1A18; /* Warna fallback jika gambar gagal dimuat */
    background-image: url('/about/tentang6.jpg'); /* Gantikan dengan path gambar kamu */
    background-size: cover; /* Memastikan gambar menutupi seluruh area */
    background-position: center; /* Memposisikan gambar di tengah */
    background-repeat: no-repeat; /* Tidak mengulang gambar */
    position: relative;
}



    </style>

</head>
<body>
<?php include 'Partials/Navbar.php'; ?>
<div class="banner">
<div class="banner-overlay" style="color:aliceblue">
      <h1 class="banner-title">Tentang Healthy Milk</h1>
    </div>
  </div>
  <div>mony</div>

 
</body>
</html>
