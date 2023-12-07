<?php
require_once 'connect.php'; // Koneksi ke database.
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WalaweeSTORE.com
  <?php echo (isset($_SESSION['is_login']) || isset($_COOKIE['_logged']) ?' '.$_SESSION['is_login'] : ''); ?></title>
    <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <p>
      <!-- Navbar start -->
  <nav class="navbar">
    
    <a href="#" class="navbar-logo">Walawee<span>STORE</span>.</a>

    <div class="navbar-nav">
      <nav>
  
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#kontak">Kontak</a></li>
             <li> 
              <?php
        echo (isset($_SESSION['is_login']) || isset($_COOKIE['_logged']) ? ''.
        '<a href="logout.php"> Logout </a>' : 
        '<a href="login.php">Login</a>');
      ?>
      </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Menu</a>
                <div class="dropdown-content">
                    <a href="#ewallet">Pilihan E-wallet</a>
                    <a href="#games">Walawee Games</a>
                    <a href="#tagihan">Walawee Tagihan</a>
        
                </div>
            </li>
        </ul>
    </nav>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Navbar end -->

  <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/provider/im3.png" alt="Product 1">
        <div class="item-detail">
          <h3>Indosat</h3>
          <a href="daftar/provider/im3.html"><div class="btn">Pesan Pulsa / Data</a></div>
        </div>
        </div>
      <div class="cart-item">
        <img src="img/provider/telkomsel.jpeg" alt="Product 2">
        <div class="item-detail">
          <h3>Telkomsel</h3>
          <a href="daftar/provider/telkomsel.html"><div class="btn">Pesan Pulsa / Data</a></div>
        </div>    
      </div>
        <div class="cart-item">
        <img src="img/provider/axis.png" alt="Product 3">
        <div class="item-detail">
          <h3>Axis</h3>
        <a href="daftar/provider/axis.html"><div class="btn">Pesan Pulsa / Data</a></div>
        </div>
        </div>
        <div class="cart-item">
        <img src="img/provider/smartfren.png" alt="Product 4">
        <div class="item-detail">
          <h3>Smartfren</h3>
          <a href="daftar/provider/smartfren.html"><div class="btn">Pesan Pulsa / Data</a></div>
        </div>
        </div>
        <div class="cart-item">
        <img src="img/provider/tri3.png" alt="Product 5">
        <div class="item-detail">
          <h3>3</h3>
          <a href="daftar/provider/3.html"><div class="btn">Pesan Pulsa / Data</a></div>
        </div>
        </div>
    </div>
    <!-- Shopping Cart end -->

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
    </div>
    <!-- Search Form end -->

  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>    Website Serbaguna Untuk   <span>  ANDA </span></h1>
      <a href="pay.html" class="cta">Beli Sekarang</a>
    </main>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="/img/sukuntul2.png" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa memilih WalaweeSTORE ?</h3>
        <p>Mau Top-up / Convert E-wallet ? Top-up Game ? Isi Token Listrik dan lain-lain ? Bisaaaa!!!!!</p>
        <p><b>WalaweeSTORE Solusinya</b></p>
        <p>Buka Setiap hari kecuali pas orangnya lagi tidur</p>
        <p><b>Proses cepat 3-5 Menit KELARRR</b></p>
        
    
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="ewallet" class="menu">
    <h2><span>Pilihan</span> E-wallet </h2>

   <div class="row">
        <div class="menu-card">
          <a href="daftar/ewallet/dana.html"><img src="img/ewallet/dana.jpeg" alt="ewallet" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- DANA -</a></h3>
          <p class="menu-card-price">ADMIN 1000</p>
        </div>
        <div class="menu-card">
          <a href="daftar/ewallet/ovo.html"><img src="img/ewallet/ovo.jpeg" alt="ewallet" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- OVO -</h3>
          <p class="menu-card-price">ADMIN 1500</p>
        </div>
        <div class="menu-card">
          <a href="daftar/ewallet/spay.html"><img src="img/ewallet/spay.png" alt="ewallet" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- SHOPPEPAY -</h3>
          <p class="menu-card-price">ADMIN 1000</p>
        </div>
           <div class="menu-card">
          <a href="daftar/ewallet/gopay.html"><img src="img/ewallet/gopay.png" alt="ewallet" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- GOPAY -</h3>
          <p class="menu-card-price">ADMIN 1000</p>
        </div>
        <div class="menu-card">
          <a href="daftar/ewallet/linkaja.html"><img src="img/ewallet/linkaja.png" alt="ewallet" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- LINKAJA -</h3>
          <p class="menu-card-price">ADMIN 1500</p>
        </div>
        </div>
  </section>
  <!-- Menu Section end -->

  <!-- Games Section start -->
  <section id="games" class="menu">
    <h2><span>Walawee</span> Games </h2>

   <div class="row">
        <div class="menu-card">
          <a href="daftar/games/ml.html"><img src="img/games/ml.jpeg" alt="games" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Mobil Legend -</a></h3>
        </div>
        <div class="menu-card">
          <a href="daftar/games/aov.html"><img src="img/games/aov.png" alt="games" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- AOV -</h3>        
        </div>
        <div class="menu-card">
          <a href="daftar/games/codm.html"><img src="img/games/codm.jpeg" alt="games" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- COD Mobile -</h3>        
        </div>
           <div class="menu-card">
          <a href="daftar/games/ff.html"><img src="img/games/epep.png" alt="games" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Free Fire -</h3>         
        </div>
        <div class="menu-card">
          <a href="daftar/games/pubg.html"><img src="img/games/pubg.png" alt="games" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- PUBG -</h3>    
        </div>
         <div class="menu-card">
          <a href="daftar/games/gensin.html"><img src="img/games/gensin.jpeg" alt="games" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Genshin Impact -</h3>    
        </div>
         <div class="menu-card">
          <a href="daftar/games/hago.html"><img src="img/games/hago.jpeg" alt="games" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Hago -</h3>    
        </div>
         <div class="menu-card">
          <a href="daftar/games/pb.html"><img src="img/games/pb.jpeg" alt="games" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Point Blank -</h3>    
        </div>
        </div>
  </section>
  <!-- Games Section end -->

  <!-- Tagihan Section Start -->
<section id="tagihan" class="menu">
    <h2><span>Walawee</span> Tagihan  </h2>

   <div class="row">
        <div class="menu-card">
          <a href="daftar/tagihan/pdam.html"><img src="img/tagihan/pdam.png" alt="tagihan" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- PDAM -</a></h3>
        </div>
        <div class="menu-card">
          <a href="daftar/tagihan/int.html"><img src="img/tagihan/wifi.png" alt="tagihan" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Tagihan Iternet -</h3>        
        </div>
        <div class="menu-card">
          <a href="daftar/tagihan/pln.html"><img src="img/tagihan/pln.png" alt="tagihan" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Tagihan Listrik -</h3>        
        </div>
           <div class="menu-card">
          <a href="daftar/tagihan/bpjs.html"><img src="img/tagihan/bpjs.png" alt="tagihan" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- BPJS -</h3>         
        </div>
        <div class="menu-card">
          <a href="daftar/tagihan/gas.html"><img src="img/tagihan/apigas.png" alt="tagihan" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Gas Negara -</h3>    
        </div>
         <div class="menu-card">
          <a href="daftar/tagihan/pbb.html"><img src="img/tagihan/pbb.jpeg" alt="tagihan" class="menu-card-img" /></a>
          <h3 class="menu-card-title">- Pajak PBB -</h3>    
        </div>
        </div>
  </section>
 
  <!-- Tagihan Section End -->

  <!-- Contact Section start -->
  <section id="kontak" class="contact">
    <h2><span>Kontak</span> Kami</h2>

    <div class="row">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.493037767219!2d112.65162817500669!3d-7.947892992076445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629bc05c97bc7%3A0x2cc8f9e59123671c!2sSTMIK%20PPKIA%20Pradnya%20Paramita%20(STIMATA)!5e0!3m2!1sid!2sid!4v1700550645810!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp">
        </div>
        <a href="#" target="_blank"><type="submit" class="btn">Kirim Pesan</a></button>
      </form>

    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>

    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Pajarawikwok</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>

</body>
      
  </body>
</html>