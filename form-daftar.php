
<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="daftar.css">
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
<br><br>
    <form class="form" action="proses-pengetahuan.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Nama: </label>
                <input class="one" type="text" name="nama" />
            </p>
            <p>
                <label for="cch">CCH: </label>
                <input class="two" type="text" name="cch"></input>
            </p>
            <p>
                <label for="boosting">Boosting: </label>
                <input type="text" name="boosting"></input>
            </p>
            <p>
                <label for="harga">Harga: </label>
                <input class="three" type="text" name="harga"></input>
            </p>
            <p>
                <label for="tanggal">Tanggal: </label>
                <input class="four" type="date" name="tanggal" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>
        <br><br><br><br><br>
    </form>
    <div class="content">
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
</div>

</body>

</html>