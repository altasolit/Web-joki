<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $cch = $_POST['cch'];
    $boosting = $_POST['boosting'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    // buat query update
    $sql = "UPDATE history_db SET nama='$nama', cch='$cch', boosting='$boosting', harga='$harga', tanggal='$tanggal' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman history.php
        header('Location: history.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>