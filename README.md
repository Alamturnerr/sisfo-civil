<p align="center">
  <img src="/public/widyatama-logo.png" width="250" alt="Widyatama Logo">
</p>

## About Repository

Repo Website Sipil UTama berisi konten berupa sistem informasi infrastruktur berbasis GIS, kumpulan berita, event, repositori pembelajaran (berupa modul, buku, dll), dan juga aplikasi perhitungan sipil. Web dibuat menggunakan framework PHP, Laravel. Untuk developer gunakan branch 'develop' untuk mengedit kode.

## Requirement

- [Laravel 8](https://laravel.com/docs/8.x)
- PHP 8.1.6
- MySQL
- [Composer](https://getcomposer.org/)
- [Bootstrap 4](https://getbootstrap.com/docs/4.6/getting-started/introduction/)
- [Git](https://git-scm.com/)

## Run Project

Pastikan sudah terinstall git dan disarankan untuk menggunakannya sebagai terminal. Berikut perintah untuk run projectnya.
- git clone
- git checkout develop (untuk pindah branch ke tempat developer mengedit kode)
- composer install, kalau tidak bisa, composer update (download & install terlebih dahulu composer sesuai OS yang dipakai)
- buat file .env, bisa copy dari .env.example & lalu buat databasenya manual lewat phpmyadmin
- php artisan migrate
- tambahkan FILESYSTEM_DRIVER=public di file .env
- php artisan storage:link
- php artisan key:generate
- php artisan serve

## Testing Data Dummy

- php artisan migrate:fresh
- php artisan tinker
- Post::factory()->count(20)->create() (contoh perintah generate data dummy tabel posts)
*jika ingin menampilkan gambar dari data dummy, diperlukan edit code di modelnya

Website ini dibuat oleh Mahasiswa Teknik Informatika Universitas Widyatama.
Enjoy code :)