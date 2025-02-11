<!-- File ini untuk membuat sesi dan menyimpan data menggunakan $_SESSION.
Buat file session_start.php dengan konten berikut: -->

<?php
session_start();  // Memulai sesi
$_SESSION['user'] = 'Budi';  // Menyimpan data dalam sesi
echo "Sesi telah dibuat untuk user: Budi";
?>
