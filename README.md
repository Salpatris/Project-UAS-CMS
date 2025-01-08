# Laravel SB Admin 2

SB Admin 2 for Laravel.

| Laravel Version | Branch | Support     |
|-----------------|--------|-------------|
| 11.0            | main   |             |
| 10.0            | v10.0  |             |
| 9.0             | v9.0   | End of life |
| 8.0             | v8.0   | End of life |

## Requirements

- PHP >= 8.2
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- Filter PHP Extension
- Hash PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Session PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

- Clone the repo and `cd` into it
- Run `composer install`
- Rename or copy `.env.example` file to `.env`
- Run `php artisan key:generate`
- Set your database credentials in your `.env` file

## Note

Recommend to install this preset on a project that you are starting from scratch, otherwise your project's design might break.

If you found this project useful, then please consider giving it a :star:

## Credits

Laravel SB Admin 2 uses some open-source third-party libraries/packages, many thanks to the web community.

- Laravel - Open source framework.
- LaravelEasyNav - Making managing navigation in Laravel easy.
- SB Admin 2 - Thanks to Start Bootstrap.

## Preview

`login`

<img src="https://imgur.com/YjGp6Sbl.png">

***

`register`

<img src="https://imgur.com/Wj09cu4l.png">

***

`dashboard`

<img src="https://imgur.com/CrmOfT5l.png">

***

`profile`

<img src="https://imgur.com/5t4eS1rl.png">

***

`logout`

<img src="https://imgur.com/d9JclOYl.png">

## Langkah-Langkah

Buat folder baru atau lokasi untuk menjalankan gitbash dengan perintah:
- git clone https://github.com/Wahyu-AN/E-Commerce_LuxAroma.git
- cd E-Commerce_LuxAroma
- code .

Ubah .env.example menjadi .env

Kemudian import file sql yang ada di /E-Commerce_LuxArome/database /Database_LuxAroma.sql

Di terminal jalankan:
-	composer install
-	php artisan key:generate
-	npm install
-	npm run watch

kemudian pada bagian storage ganti/hapus folder app nya dengan folder yang diekstrak dari app.zip

Masuk ke C:\xampp\apache\conf\httpd.conf

klik dan tambahkan kode berikut (sesuaikan dengan lokasi git clone anda):
Alias /storage "D:/A_Laravel10/E-Commerce_LuxAroma/storage/app/public"
<Directory "D:/A_Laravel10/E-Commerce_LuxAroma/storage/app/public">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

Pada XAMPP (yang di run administrator), pada kolom actions di baris MYSQL dan Apache

Klik “Stop”, kemudian klik “Start” kembali

Lalu jalankan php artisan serve di visual studio.

Untuk login ke dashboard admin menggunakan:
- Email: tootes202@gmail.com
- Password: wahyu1704


## License

Licensed under the [MIT](LICENSE) license.
