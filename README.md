<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Tentang Projek

Ini adalah sebuah contoh projek Laravel sederhana dengan integrasi Xendit sebagai _payment gateway_-nya. Fitur yang dipakai hanya sebatas **pembuatan invoice** dan **callback invoice**. Kedua fitur tersebut bisa dipakai sebagai syarat minimum aktivasi akun Xendit menjadi Live dan menerima transaksi sungguhan.

## Instalasi Projek

Projek ini merupakan kerangka projek, jadi harus dijalankan sebagai program utama dan tidak disarankan untuk digabungkan ke dalam projek yang sudah berjalan sebelumnya.

Cara instalasinya, sebagai berikut:

- Buka *Terminal* favorit Anda.
- *Clone* projek ini : `git clone https://github.com/AaEzha/laravel-xendit-example.git`
- Masuk ke dalam folder : `cd laravel-xendit-example`
- Lakukan instalasi *dependency* : `composer install`
- Salin atau *rename* file **.env.example** menjadi **.env** : `cp .env.example .env`
- Atur informasi database, seperti **DB_DATABASE**, **DB_USERNAME**, dan **DB_PASSWORD**.
- Lalu jalankan migrasi data : `php artisan migrate --seed`
- Projek siap dijalankan : `php artisan serve`

Projek ini dibuat sesederhana mungkin tanpa banyak aksi yang diperlukan. Jadi, sila kreasikan sendiri aplikasi Anda.

## Integrasi Xendit

Sila buat akun Xendit Anda melalui [Xendit](https://xendit.co), kemudian arahkan ke menu *Settings* - *Callbacks*. Lalu *generate* Secret Key dan salin Public Key dan pasangkan di file `.env`.

```
XENDIT_SECRET_API_KEY=
XENDIT_PUBLIC_API_KEY=
XENDIT_TOKEN=
XENDIT_CALLBACK_VERIFICATION_TOKEN=
```

## Live Preview

[xendit.elx.web.id](https://xendit.elx.web.id)

## Jadi Sponsor

Jika Anda merasa terbantu dengan projek sederhana ini, bisa berkontribusi dalam pengembangan projek ini atau dengan menyalurkan sebagian rezekinya untuk saya dan keluarga melalui [Saweria](https://saweria.co/rezanurfachmi).

## Celah Keamanan

Jika Anda menemukan sebuah celah keamanan pada projek ini, tolong kirim email ke saya, Reza Nurfachmi melalui [reza@nurfachmi.com](mailto:reza@nurfachmi.com). Seluruh laporan, insyaallah akan kami telusuri dengan baik.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
