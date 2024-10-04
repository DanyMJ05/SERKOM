# README Proyek Laravel

File README ini memberikan gambaran tentang struktur/hirarki folder dan sumber daya pemrograman yang digunakan dalam proyek kali ini.

## Struktur Folder

Proyek Laravel mengikuti struktur folder standar, sebagai berikut:

- `app`: Berisi model, controller, middleware, dan kelas PHP lainnya.
- `bootstrap`: Berisi file bootstrap dan konfigurasi aplikasi.
- `config`: Berisi file konfigurasi untuk berbagai aspek aplikasi.
- `database`: Berisi file terkait database, termasuk migrasi dan seed.
- `public`: Document root server web. Berisi front controller (`index.php`) dan aset yang dapat diakses publik.
- `resources`: Berisi view, aset (CSS, JavaScript, gambar), dan file bahasa aplikasi.
- `routes`: Berisi definisi rute aplikasi.
- `storage`: Berisi file yang dihasilkan, seperti log, cache, dan file yang diunggah.
- `tests`: Berisi tes otomatis aplikasi.
- `vendor`: Berisi dependensi proyek yang diinstal melalui Composer.
- `node_modules`: Berisi dependensi JavaScript yang dikelola oleh npm atau Yarn.

## Sumber Daya Pemrograman

Proyek Laravel menggunakan beberapa sumber daya pemrograman dan konsep. Berikut ini adalah beberapa yang utama:

- **PHP**: Laravel adalah framework PHP, sehingga proyek ini utamanya ditulis dalam PHP.
- **Blade Templating Engine**: Laravel menggunakan mesin templating Blade untuk menghasilkan tampilan dinamis.
- **Eloquent ORM**: Eloquent ORM Laravel menyediakan cara yang ekspresif dan nyaman untuk berinteraksi dengan database.
- **Artisan CLI**: Antarmuka baris perintah Artisan Laravel menyediakan sejumlah perintah yang berguna untuk berbagai tugas pengembangan.
- **Composer**: Composer adalah alat pengelolaan dependensi untuk PHP. Dependensi proyek dikelola menggunakan Composer.
- **npm atau Yarn**: Proyek ini mungkin menggunakan npm atau Yarn untuk mengelola dependensi JavaScript dan membangun aset frontend.
- **Database**: Laravel mendukung beberapa database, termasuk MySQL, PostgreSQL, SQLite, dan SQL Server.
- **Routing**: Laravel menyediakan sistem routing yang kuat untuk mendefinisikan rute aplikasi dan menangani permintaan HTTP.
- **Middleware**: Middleware memungkinkan Anda memfilter permintaan HTTP yang masuk ke aplikasi.
- **Autentikasi**: Laravel menyediakan sistem autentikasi secara default, termasuk pendaftaran pengguna, login, dan reset password.
- **Validasi**: Laravel menawarkan sistem validasi untuk memvalidasi input pengguna dan data.
- **Testing**: Laravel menyediakan kerangka kerja pengujian untuk menulis pengujian otomatis guna memastikan kualitas kode dan fungsionalitas aplikasi.

## Instalasi

Untuk memulai dengan proyek Laravel, ikuti langkah-langkah berikut:

1. Clone repositori proyek.
2. Instal dependensi proyek dengan menjalankan `composer install`.
3. Buat file `.env` berdasarkan file `.env.example` dan perbarui pengaturan sesuai kebutuhan Anda.
4. Generate kunci aplikasi dengan menjalankan `php artisan key:generate`.
5. Migrasikan database dengan menjalankan `php artisan migrate`.
6. Jalankan server pengembangan dengan menjalankan `php artisan serve`.
7. Akses aplikasi di peramban Anda melalui URL yang ditentukan.

Harap dicatat bahwa ini adalah instruksi umum, dan Anda mungkin perlu menyesuaikannya berdasarkan pengaturan dan persyaratan spesifik Anda.
