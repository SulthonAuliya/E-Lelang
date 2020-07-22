<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About E-Lelang

E-Lelang is an online auction web application, made for everyone who wants to make an online auction system based on web.

- Simple, easy access.
- can be develop for a serious plan easily since you just need to give a few update to make this website wonderfull.

E-Lelang is easy to use, and easy to be developed more.

## How to install

This is a few easy steps for you to run this website locally in your dekstop after cloning this project.

- rename folder "env.example" menjadi ".env"
- buka cmd lalu jalankan "composer update"

1. Buat lah database pada phpmyadmin dengan nama "lelang"
2. Buka CMD pada folder ini lalu jalankan perintah "php artisan key:generate"
3. Lalu jalankan "php artisan migrate"
4. Lalu jalankan "composer dump-autoload"
5. Lalu jalankan "php artisan db:seed --class=CreateAdminSeeder"
6. Lalu jalankan "php artisan db:seed --class=barangSeeder"
7. Lalu jalankan "php artisan db:seed --class=lelangSeeder"
8. Lalu jalankan "php artisan db:seed --class=hargaSeeder"
9. lalu ketikan perintah "php artisan serve"
10. copy halaman yang tertera pada hasil outputnya ex : http://127.0.0.1:8000
11. jalankan web


## Default user you can use

- Admin   = admin@gmail.com 	passsword = 123456789
- Petugas = petugas@gmail.com 	passsword = 123456789
- User    = user@gmail.com 		passsword = 123456789
- User    = kevin@gmail.com     passsword = 123456789
- User    = sulthon@gmail.com 	passsword = 123456789
- User    = dimas@gmail.com 	passsword = 123456789

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

Please contact me for permission of developing this project more.
