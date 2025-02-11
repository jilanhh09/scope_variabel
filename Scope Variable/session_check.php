<!-- File ini akan memeriksa data sesi yang telah disimpan di session_start.php.
Buat file session_check.php dengan konten berikut: -->

<?php
session_start();  // Memulai sesi
if (isset($_SESSION['user'])) {
    echo "Nama pengguna dalam sesi adalah: " . $_SESSION['user'];
} else {
    echo "Sesi tidak ditemukan.";
}
?>
