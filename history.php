<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="history.css">
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

<br><br><br>
    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>CCH</th>
            <th>Boosting</th>
            <th>Harga</th>      
            <th>Tanggal</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

<?php include("config.php"); ?>
        <?php
        $sql = "SELECT * FROM history_db";
        $query = mysqli_query($db, $sql);

        while($joki = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$joki['id']."</td>";
            echo "<td>".$joki['nama']."</td>";
            echo "<td>".$joki['cch']."</td>";
            echo "<td>".$joki['boosting']."</td>";
            echo "<td>".$joki['harga']."</td>";
            echo "<td>".$joki['tanggal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$joki['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$joki['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <div class="total">
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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