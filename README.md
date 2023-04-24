<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## About
Kami

## Cara Install

- [Install PHP Versi Terbaru Minimal Versi 8.1](https://www.php.net/downloads.php).
- [Download Git](https://git-scm.com/downloads).
- Setelah Itu Install Git [Tutorial](https://youtu.be/e-6OkXRqWaE).
- [Download Composer Versi Terbaru](https://getcomposer.org).
- Setelah Itu Install Composer [Tutorial](https://youtu.be/hehfb2oz8xI).
- Setelah Menginstall Git Selanjutnya Buka Terminal Dan Cloning Project Ini "https://github.com/ArvinAjifTechnology/ekspedisi_barang.git" ke folder yang diinginkan.
```
cd <Folder Tujuan>
```

```
git clone https://github.com/ArvinAjifTechnology/ekspedisi_barang.git
```
- Tunggu hingga proses cloning selesai.
- Setelah proses cloning selesai, pindah ke folder hasil cloning dengan perintah

```
cd ekspedisi_barang
```
- Setelah Itu Untuk Menginstall Laravel Ketikan Peritah
```
composer install
```
- Setelah Itu Kita Buat File .env Dengan Mengetikan
```
cp .env.example .env
```
- Setelah Membuat File .env, Selanjutnya menambahkan App Key Dengan Perintah
```
php artisan key:generate
```
- Untuk Menjalankan Project Ini Kita Ketikan
```
php artisan serve
```
- Selamat Project Berhasil Di Jalankan
    ## Setup Database
    - Setelah Kita Berhasil Setup Project Selanjutnya Kita Akan Setup Database.
    - Buat Database "ekspedisi_barang".
    ```
    mysql -uroot -p
    ```
    ```
    create database ekspedisi_barang;
    ```
    - Setelah Membuat Database Selanjutnya Kita Akan Setup Database Di File .env.
    - Buka File .env Lalu Pada Baris 11 Ubah Menjadi.
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ekspedisi_barang
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    - Untuk Password Nya Isikan Sesuai Dengan Settingan MySQL Yang Ada Di Device Masing-Masing
    - Untuk Membuat Tabel Nya Kita Ketikan
    ```
    php artisan migrate:fresh
    ```
    - Selanjutnya Kita Akan Setup Email.
    ## Setup Email
    Dalam Project Ini Telah Dilengkapi Dengan Fitur Pengiriman Mail Secara Otomatis. Fitur Ini Membutuhkan HOST SMTP. HOST SMTP Ini Bisa Didapatkan Dari Website           Provider Yang Berbayar tetapi dalam project ini menggunakan gmail sebagai SMTP nya, Berikut Langkah-Langkah Nya.
    - Siapkan Akun Google yang akan di jadikan sebagai Host.
    - Setelah itu buka "myaccount.google.com".
    - Setelah Itu Kita Cari "Apps Password".
    - Lalu Verifikasi Bahwa Itu Anda.
    - Kemudian Pada Bagian "Pilih Aplikasi" Kita Pilih Lainnya (Nama Kustom).
    - Lalu kita Beri Nama Bebas Misalkan "Laravel".
    - Kemudian Klik "Buat".
    - Secara Otomatis Akan Tergenerate.
    - Simpan Kode Itu.
    - Tahap Selanjutnya Buka File ".env".
    - Pada Bagian
    ```
    MAIL_MAILER=smtp
    MAIL_HOST=mailpit
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"
    ```
    - Kita Ubah Menjadi
    ```
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=youremail@example.com
    MAIL_PASSWORD= // Isikan Dengan Kode Yang Di generate oleh google
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS="2106100@itg"
    MAIL_FROM_NAME="${APP_NAME}"
    ```
    - Pada Bagian MAIL_USERNAME Dan MAIL_PASSWORD Kita Isikan Dengan Akun Yang telah Kita Siapkan Dengan Password Yang Tadi Kita Generate Oleh Google.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
