<!-- File ini digunakan untuk mengambil data melalui URL menggunakan $_GET.
Buat file get.php dengan konten berikut: -->

<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];  // Mengambil data dari URL
    echo "Nama yang dikirim melalui URL adalah: $nama";
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
