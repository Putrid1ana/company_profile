<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4CAF50;
            padding: 15px 20px;
        }

        .logo {
            font-size: 30px; 
            font-family: Roboto;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            list-style: none;
            align-items: center;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: black; 
            font-size: 16px; 
            font-family: Poppins;
        }

        .nav-links a:hover {
            color: #ddd;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 24px;
            z-index: 10;
            color: white;
        }

        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                right: 0;
                top: 0;
                background-color: #4CAF50;
                flex-direction: column;
                align-items: center;
                width: 100%;
                height: 350px;
                clip-path: circle(0px at 100% 0%);
                transition: clip-path 0.5s ease-in-out;
                padding-top: 50px;

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

            /* Hover effect for list items in mobile */
            .nav-links li:hover {
                background-color: red;
                width: 100%;
                height: 20%;
                transition: background-color 0.3s ease-in-out;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .nav-links a:hover {
                color: white;
                transition: color 0.3s ease-in-out;
            }
        }
    </style>
      <nav class="navbar">
        <div class="logo">Healthy Milk</div>
        <ul class="nav-links">
            <li><a href="/">Beranda</a></li>
            <li><a href="/tentang">Tentang</a></li>
            <li><a href="/artikel">Artikel</a></li>
            <li><a href="/produk">Produk</a></li>
            <li><a href="/aktivitas">Aktivitas</a></li>
            <li><a href="/kontak">Kontak</a></li>
            <li>
                <select style="padding: 5px; font-family: Inika; font-size: 16px; margin-right: 28px;">
                    <option value="" hidden>Bahasa</option>
                    <option value="id">Indonesia</option>
                    <option value="en">English</option>
                </select>
            </li>
        </ul>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        // Fungsi untuk membuka/menutup menu navigasi
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('open');
            const icon = hamburger.querySelector('i');
            // Toggle antara ikon "bars" dan "close"
            if (navLinks.classList.contains('open')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times'); // Mengubah menjadi ikon "X"
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars'); // Kembali ke ikon "bars"
            }
        });
    </script>