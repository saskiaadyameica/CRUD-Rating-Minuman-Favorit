# CRUD Minuman Favorit - Laravel

## Deskripsi
Project ini merupakan web sederhana berbasis Laravel 12 yang digunakan untuk mengelola data minuman favorit melalui rating 1-10. Web ini menerapkan konsep CRUD (Create, Read, Update, Delete) dengan database MySQL.

## Fitur
1. Menampilkan data minuman favorit 
2. Menambahkan data minuman baru
3. Mengedit data minuman
4. Menghapus data minuman
   
## Struktur Data
Tabel `minumans` memiliki struktur sebagai berikut:
- id (primary key)
- user (nama pengguna)
- jenis_minuman (jenis minuman)
- brand (nama brand atau toko)
- rating (nilai rating 1-10)
- created_at
- updated_at
  
## Teknologi 
- Laravel
- PHP
- MySQL
  
## Prosedur Instalasi
1. Buka terminal dan masuk ke folder project cd C:\xampp\htdocs\crud_minuman
2. Install dependency: composer install
3. Buat database di phpMyAdmin: crud_minuman
4. Jalankan migrasi: php artisan migrate
5. Jalankan server: php artisan serve
6. Akses di browser: http://127.0.0.1:8000
