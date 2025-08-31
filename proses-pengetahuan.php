<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $cch = $_POST['cch'];
    $boosting = $_POST['boosting'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    // buat query
    $sql = "INSERT INTO history_db (nama, cch, boosting, harga, tanggal) VALUE ('$nama', '$cch', '$boosting', '$harga', '$tanggal')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman Confirm sukses.php dengan status=sukses
        header('Location: Confirm sukses.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: Confirm sukses.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>