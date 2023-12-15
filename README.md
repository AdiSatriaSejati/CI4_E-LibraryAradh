![image](https://github.com/AdiSatriaSejati/CI4_E-LibraryAradh/assets/117582840/4a9e0882-d88a-465d-9033-00bcfa2bc3a8)![image](https://github.com/AdiSatriaSejati/CI4_E-LibraryAradh/assets/117582840/d8ad61a8-2be1-4325-be2e-5a3c436677cd)![image](https://github.com/AdiSatriaSejati/CI4_E-LibraryAradh/assets/117582840/f3ba1866-db65-4ab3-928a-f3e28057b0b0)![image](https://github.com/AdiSatriaSejati/CI4_E-LibraryAradh/assets/117582840/d7691e5b-56ba-472e-9446-bbe80768a4f7)<p align="center"><a href="https://codeigniter.com/" target="_blank"><img src="https://ik.imagekit.io/AdiSatriaSejati/CI4.png?updatedAt=1702624913290" width="400" alt="CodeIgniter Logo"></a></p>

# E-LibraryAradh

![Preview](https://github.com/AdiSatriaSejati/CI4_E-LibraryAradh/raw/main/screenshots/Home.gif)

## Fitur

- Login, Register & Magic login link (via Email)
- Dashboard admin
- QR Code anggota
- QR Code peminjaman
- Sistem denda
- Dan lainnya.

## Framework dan Library Yang Digunakan

- [CodeIgniter 4](https://codeigniter.com/)
- [CodeIgniter Shield](https://codeigniter4.github.io/shield/)
- [Bootstrap 5](https://getbootstrap.com/)
- [Modernize Free Bootstrap 5 Admin Template](https://adminmart.com/product/modernize-free-bootstrap-5-admin-template/)
- [Tabler Icons](https://tabler-icons.io/)
- [Apex Charts](https://apexcharts.com/)
- [Endroid QR Code Generator](https://github.com/endroid/qr-code)
- [Mebjas Html5-QRCode Scanner](https://github.com/mebjas/html5-qrcode)

## Persyaratan

- [Composer >= 2.6.3](https://getcomposer.org/)
- [Laragon 6.0.0](https://laragon.org/download/index.html) / [XAMPP](https://www.apachefriends.org/download.html)
- MySQL >= 5.7.39
- PHP >= 8.1.10
- Kamera/Webcam untuk menjalankan qr scanner.

## Instalasi

1. Kloning repositori:
    ```bash
    git clone https://github.com/AdiSatriaSejati/CI4_E-LibraryAradh.git
    ```
2. Masuk ke direktori proyek:
    ```bash
    cd CI4_E-LibraryAradh
    ```
3. Instal dependencies menggunakan Composer:
    ```bash
    composer install
    ```
4. Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```
5. Buat Database di http://localhost/phpmyadmin/
   ```bash
   E-LibraryXpert
   ```
6. Menjalankan Migrasi Database:
    ```bash
    php spark migrate --all
    ```
7. Menambahkan Data ke Database dengan SuperAdminSeeder:
    ```bash
    php spark db:seed SuperAdminSeeder
    ```
8. Penambahan Data Tambahan:
    ```bash
    php spark db:seed Seeder
    ```
9. Jalankan Website:
    ```bash
    php spark serve
    ```
10. http://localhost:8080

11. Akun :
    - Email Address
      ```bash
      Kelompok-2@bsi.ac.id
      ```
    - Password
      ```bash
      12345678
      ```
      
# Denda di file .env
amountFinesPerDay = 1000

## Donasi

<p align="center"><a href="https://codeigniter.com/" target="_blank"><img src="https://ik.imagekit.io/AdiSatriaSejati/CI4.png?updatedAt=1702624913290" width="400" alt="CodeIgniter Logo"></a></p>

# E-LibraryAradh

![Preview](https://github.com/AdiSatriaSejati/CI4_E-LibraryAradh/raw/main/screenshots/Home.gif)

## Fitur

- Login, Register & Magic login link (via Email)
- Dashboard admin
- QR Code anggota
- QR Code peminjaman
- Sistem denda
- Dan lainnya.

## Framework dan Library Yang Digunakan

- [CodeIgniter 4](https://codeigniter.com/)
- [CodeIgniter Shield](https://codeigniter4.github.io/shield/)
- [Bootstrap 5](https://getbootstrap.com/)
- [Modernize Free Bootstrap 5 Admin Template](https://adminmart.com/product/modernize-free-bootstrap-5-admin-template/)
- [Tabler Icons](https://tabler-icons.io/)
- [Apex Charts](https://apexcharts.com/)
- [Endroid QR Code Generator](https://github.com/endroid/qr-code)
- [Mebjas Html5-QRCode Scanner](https://github.com/mebjas/html5-qrcode)

## Persyaratan

- [Composer >= 2.6.3](https://getcomposer.org/)
- [Laragon 6.0.0](https://laragon.org/download/index.html) / [XAMPP](https://www.apachefriends.org/download.html)
- MySQL >= 5.7.39
- PHP >= 8.1.10
- Kamera/Webcam untuk menjalankan qr scanner.

## Instalasi

1. Kloning repositori:
    ```bash
    git clone https://github.com/AdiSatriaSejati/CI4_E-LibraryAradh.git
    ```
2. Masuk ke direktori proyek:
    ```bash
    cd I4_E-LibraryAradh
    ```
3. Instal dependencies menggunakan Composer:
    ```bash
    composer install
    ```
4. Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```
5. ![Buat Database di](http://localhost/phpmyadmin/)
   ```bash
   E-LibraryXpert
   ```
6. Menjalankan Migrasi Database:
    ```bash
    php spark migrate --all
    ```
7. Menambahkan Data ke Database dengan SuperAdminSeeder:
    ```bash
    php spark db:seed SuperAdminSeeder
    ```
8. Penambahan Data Tambahan:
    ```bash
    php spark db:seed Seeder
    ```
9. Jalankan Website:
    ```bash
    php spark serve
    ```
10. http://localhost:8080

11. Akun :
    - Email Address
      ```bash
      Kelompok-2@bsi.ac.id
      ```
    - Password
      ```bash
      12345678
      ```
      
# in rupiah
amountFinesPerDay = 1000

## Donasi

[![Donate paypal](https://img.shields.io/badge/Donate-PayPal-green.svg?style=for-the-badge)](https://paypal.me/AdiSatriaSejati?country.x=ID&locale.x=id_ID)


## Authors

|kelompok 2                                                                                      | NIM      | NAMA                 | E-Mail             |
-------------------------------------------------------------------------------------------------| -------- | -------------------- | ------------------ |
![Alt](https://em-content.zobj.net/source/microsoft-teams/337/man-student_1f468-200d-1f393.png)  | 12221455 | Adi Satria Sejati    | 12221455@bsi.ac.id |
![Alt](https://em-content.zobj.net/source/microsoft-teams/337/woman-student_1f469-200d-1f393.png)| 12220510 | Annisa Rahma Pyarry  | 12220510@bsi.ac.id |
![Alt](https://em-content.zobj.net/source/microsoft-teams/337/man-student_1f468-200d-1f393.png)  | 12221446 | Dani Saputra         | 12221446@bsi.ac.id |
![Alt](https://em-content.zobj.net/source/microsoft-teams/337/man-student_1f468-200d-1f393.png)  | 12220035 | Heri Setiawan        | 12220035@bsi.ac.id |
![Alt](https://em-content.zobj.net/source/microsoft-teams/337/man-student_1f468-200d-1f393.png)  | 12220098 | Ryan Ramadhan        | 12220098@bsi.ac.id |

