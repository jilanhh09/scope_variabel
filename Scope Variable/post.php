<!-- File ini akan menerima data dari form.html menggunakan metode POST dan menampilkan data yang dikirim. 
 Buat file post.php dengan konten berikut: -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];  // Mengambil data dari form
    echo "Nama yang dikirim adalah: $nama";
}
?>
