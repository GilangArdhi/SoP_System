# 🍽️ PoS_System - Laravel Point of Sale untuk Restoran
![Menu](https://github.com/GilangArdhi/PoS_System/blob/master/public/assets/images/gambar_2025-05-19_103432689.png)
Sistem Point of Sale (PoS) berbasis Laravel yang dirancang khusus untuk kebutuhan operasional restoran. Aplikasi ini membantu dalam pencatatan transaksi, pengelolaan menu makanan dan minuman, serta menghasilkan laporan penjualan harian secara efisien.

## 📋 Fitur Utama

- ✅ Manajemen Menu Makanan & Minuman  
- ✅ Pencatatan Pesanan dan Pembayaran  
- ✅ Pengelolaan Transaksi Penjualan  
- ✅ Cetak Struk Pembayaran  
- ✅ Laporan Penjualan Harian  
- ✅ Antarmuka User-Friendly  

## ⚙️ Teknologi yang Digunakan

- Framework: [Laravel](https://laravel.com/)  
- Bahasa Pemrograman: PHP  
- Database: MySQL  
- Frontend: Blade Templating, Bootstrap (jika digunakan)  
- Autentikasi: Laravel Breeze / Jetstream (jika digunakan)  

## 🚀 Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

### 1. Clone Repository

```bash
git clone https://github.com/GilangArdhi/PoS_System.git
cd PoS_System
```

### 2. Install Dependency
```bash
composer install
npm install && npm run dev
```

3. Konfigurasi Environment
Buat file .env:

```bash
cp .env.example .env
```
Edit file .env dan sesuaikan konfigurasi database Anda:
```bash
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

4. Generate Key dan Migrate
```bash
php artisan key:generate
php artisan migrate --seed
```

5. Jalankan Server
```bash
php artisan serve
Buka di browser: http://localhost:8000
```

🧪 Testing
Jika Anda memiliki testing unit atau feature, jalankan dengan:

```bash
php artisan test
```

🤝 Kontribusi
Kontribusi sangat terbuka! Ikuti langkah berikut:

1. Fork repository ini
2. Buat branch fitur baru (git checkout -b fitur-anda)
3. Commit perubahan Anda (git commit -m 'Menambahkan fitur XYZ')
4. Push ke branch (git push origin fitur-anda)
5. Buat Pull Request
