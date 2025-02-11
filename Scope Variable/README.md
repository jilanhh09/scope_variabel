# Memahami Scope Variabel dalam PHP

TUGAS 2 ini bertujuan untuk memahami konsep **scope variabel dalam PHP** dengan menguji berbagai tipe variabel seperti **global, lokal, static, dan superglobal ($_POST, $_GET, $_SESSION)**.

## 📌 Struktur Proyek
Berikut adalah struktur proyek:


## 📋 Deskripsi File
- **`form.html`**: Halaman form untuk mengirim data melalui metode **`POST`**.
- **`post.php`**: Memproses data yang dikirim melalui **`$_POST`** dan menampilkannya.
- **`get.php`**: Mengambil data dari URL menggunakan **`$_GET`** dan menampilkannya.
- **`session_start.php`**: Membuat sesi dan menyimpan data menggunakan **`$_SESSION`**.
- **`session_check.php`**: Menampilkan data sesi yang telah disimpan dengan **`$_SESSION`**.

## 🚀 Cara Menjalankan
1. **Clone repository**:
2. **Jalankan server lokal** (di terminal atau command prompt):
3. **Akses halaman di browser**:
- **Uji `$_POST`**: [http://localhost:8000/form.html](http://localhost:8000/form.html)  
  Isi form, kemudian kirim. Data akan diproses oleh **`post.php`**.
- **Uji `$_GET`**: [http://localhost:8000/get.php?nama=Ali](http://localhost:8000/get.php?nama=Ali)  
  Mengirim data melalui URL dan memprosesnya dengan **`get.php`**.
- **Uji `$_SESSION`**:  
  1. [http://localhost:8000/session_start.php](http://localhost:8000/session_start.php) → Membuat sesi dan menyimpan data.  
  2. [http://localhost:8000/session_check.php](http://localhost:8000/session_check.php) → Menampilkan data sesi yang disimpan.

## 📖 Hasil Pengujian
- **`$_POST`**: Mengirim data dari form dan memprosesnya di **`post.php`**.
- **`$_GET`**: Mengambil data yang dikirim melalui URL dan memprosesnya di **`get.php`**.
- **`$_SESSION`**: Menyimpan data dalam sesi dan menampilkannya di **`session_check.php`**.

## 📝 Kesimpulan
- **Global**: Variabel yang bisa diakses di luar fungsi.
- **Lokal**: Variabel yang hanya bisa diakses di dalam fungsi.
- **Static**: Variabel yang nilainya tetap ada meskipun fungsi selesai.
- **Superglobal**: Variabel seperti **`$_POST`**, **`$_GET`**, dan **`$_SESSION`** yang bisa diakses dari mana saja di dalam script PHP.

## 📂 Lisensi
Proyek ini dibuat untuk keperluan pembelajaran. Silakan gunakan dan modifikasi sesuai kebutuhan.



