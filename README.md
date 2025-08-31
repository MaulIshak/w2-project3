# Proyek Website Sederhana - PHP & CodeIgniter 4

Repositori ini berisi hasil pengerjaan proyek pengembangan website sederhana sebagai bagian dari "Proyek 3 Pengembangan Perangkat Lunak Berbasis Web (2025)". Proyek ini bertujuan untuk mempelajari dasar-dasar PHP dan implementasi kerangka kerja (framework) CodeIgniter 4 dengan konsep Model-View-Controller (MVC).

## 📂 Struktur Proyek

Proyek ini dibagi menjadi dua bagian utama:

### PHP Mandiri (php-mandiri)
- Bagian ini berisi latihan dasar menggunakan PHP native untuk memahami:
  - Sintaks dasar
  - Logika pemrograman (berurutan, pemilihan, perulangan)
  - Integrasi dengan HTML
  - Fungsionalitas CRUD sederhana yang terhubung ke database

### CodeIgniter 4 CRUD (ci4-crud)
- Aplikasi web yang dibangun menggunakan framework CodeIgniter 4
- Mengimplementasikan konsep MVC
- Sistem CRUD (Create, Read, Update, Delete) data mahasiswa yang terstruktur dan modern

## 🚀 Teknologi yang Digunakan

- **Bahasa**: PHP
- **Framework**: CodeIgniter 4
- **Database**: MySQL
- **Frontend**: HTML & CSS (Bootstrap)
- **Package Manager**: Composer

## 🛠️ Cara Menjalankan Proyek

### Prasyarat
- PHP 8.1 atau lebih baru
- Composer
- Web server (misalnya Apache, Nginx) atau server pengembangan PHP
- Database MySQL

### Langkah-langkah Instalasi (Untuk ci4-crud)

1. **Clone repositori ini:**
```bash
git clone <URL_REPOSITORY_ANDA>
cd w2-project3/ci4-crud
```

2. **Install dependensi Composer:**
```bash
composer install
```

3. **Konfigurasi Environment:**
  - Salin file env menjadi .env
```bash
cp env .env
```
  - Sesuaikan pengaturan pada file .env:
```env
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = mahasiswa
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

4. **Database:**
   - Buat database dengan nama yang sesuai konfigurasi .env (contoh: mahasiswa)
   - Impor tabel biodata jika diperlukan

5. **Jalankan server pengembangan:**
```bash
php spark serve
```

Aplikasi akan berjalan di http://localhost:8080
