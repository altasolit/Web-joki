<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Reyy Store</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    <div class="header">
      <aside class="sidebar">
        <div class="sidebar-inner">
          <header class="sidebar-header">  
            <button
                type="button"
                onclick="toggleSidebar()" 
              ><i class="fa-solid fa-bars"></i>
            </button>
            <img class="img-sidebar" src="logo.png" alt="">
          </header>
          <nav class="sidebar-nav">
            <button type="button">
              <a href="index.php">Home</a > 
            </button>
            <button type="button">
              <a href="history.php" style="animation-delay: 0.1s">History</a>
            </button>
            <button type="button">
              <a href="kalkulator.php" style="animation-delay: 0.2s">Calculator</a>
            </button>
            <button type="button">
              <a href="login.php" style="animation-delay: 0.3s">Accounts</a>
            </button>
          </nav>
        </div>
      </aside>
      <div class="logo">
        <img src="logo.png" alt="Logo">
        Reyy Store
      </div>
    </div>
  </header>


  <div class="content">
    <!--gambar -->
    <center>
      <div class="banner" style="max-width:1000px;" style="max-height:110px">
        <img class="mySlides" src="1.png" style="width:100%">
        <img class="mySlides" src="2.png" style="width:100%">
        <img class="mySlides" src="3.png" style="width:100%">
      </div>
    </center>

    <!-- search bar -->
    <center>
      <div class="filters">
        <div class="search-bar">
          <i class="fa-solid fa-search"></i>
          <input class="search" type="text" placeholder="Search">
        </div>
      </div>
    </center>

    <!-- konten -->
    <div class="column-1">

      <div class="joki">
        <a href="form-daftar.php"><img class="joki-list" src="10.png" alt="Logo" width="100" height="100"></a>
      </div>

      <div class="joki">
        <a href="form-daftar.php"><img class="joki-list" src="20.png" alt="Logo" width="100" height="100"></a>
      </div>

    </div>

    <footer class="footer">
      <div class="footer__addr">
        <div class="logo-footer">
          <img src="logo.png" alt="Logo">
          Reyy Store
        </div>
        <h2>Contact</h2>
        <address>
          Jl. Bondol D2/38, RT.03/RW.17, Perumnas, Kel.Larangan, Kec. Harjamukti Kota Cirebon, Jawa Barat 45141<br>

          <a class="footer__btn" href="mailto:andreasyovel@gmail.com">Contact Us</a>
        </address>
      </div>

      <ul class="footer__nav">
        <li class="nav__item">
          <h2 class="nav__title">All Links</h2>

          <ul class="nav__ul">
            <li>
              <a href="#">Home</a>
            </li>

            <li>
              <a href="#">Report</a>
            </li>

            <li>
              <a href="#">About</a>
            </li>
          </ul>
        </li>

        <li class="nav__item nav__item--extra">
          <h2 class="nav__title">Our Service</h2>

          <ul class="nav__ul nav__ul--extra">
            <li>
              <a href="#">Joki</a>
            </li>

            <li>
              <a href="#">Top-up</a>
            </li>

            <li>
              <a href="#">Re-seller</a>
            </li>

            <li>
              <a href="#">Worker</a>
            </li>

            <li>
              <a href="#">Web Service</a>
            </li>

            <li>
              <a href="#">Coming Soon</a>
            </li>
          </ul>
        </li>

        <li class="nav__item">
          <h2 class="nav__title">Payment</h2>

          <ul class="footer-payment">
            <li class="dana">
              <img src="dana.jpg" alt="">
            </li>
          </ul>
          <ul class="footer-payment">
            <li class="gopay">
              <img src="gopay.jpg" alt="">
            </li>
          </ul>
        </li>
      </ul>

      <div class="legal">
        <p>Copyright © 2024 Reyy.my.to All rights reserved.</p>

        <div class="legal__links">
          <span>Made with <span class="heart">♥</span> By <strong>Reyy.co</strong></span>
        </div>
      </div>
    </footer>

    <script type="text/javascript">
      const toggleSidebar = () => document.body.classList.toggle("open"); 

    </script>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>