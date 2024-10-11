<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
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
    font-weight: 700
}

.nav-links {
    display: flex;
    list-style: none;
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
    flex-direction: column;
    cursor: pointer;
}

.hamburger span {
    height: 3px;
    width: 25px;
    background-color: white;
    margin: 4px 0;
}

@media (max-width: 768px) {
    .nav-links {
        position: absolute;
        right: 0;
        height: 100vh;
        top: 0;
        background-color: #4CAF50;
        flex-direction: column;
        align-items: center;
        width: 100%;
        clip-path: circle(0px at 100% 0%);
        transition: clip-path 0.5s ease-in-out;
    }

    .nav-links.open {
        clip-path: circle(100% at 50% 50%);
    }

    .nav-links li {
        margin: 50px 0;
    }

    .hamburger {
        display: flex;
    }
}
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">Healthy Milk</div>
        <ul class="nav-links">
            <li> <a href="/" >Beranda</a></li>
            <li><a href="/tentang">Tentang</a></li>
            <li><a href="/artikel" >Artikel</a></li>
            <li><a  href="/produk">Produk</a></li>
            <li><a href="/aktivitas">Tentang</a></li>
            <li><a href="/kontak" >Artikel</a></li>
       
        </ul>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('open');
        });
    </script>
</body>
</html>
----