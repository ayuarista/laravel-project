# Cara Instalasi Laravel Menggunakan Laragon

## Prasyarat

- *Composer* (versi terbaru)  
  [Download Composer](https://getcomposer.org/download/)  
- *PHP* (Minimal Versi 8.2.26)  
  [Download PHP](https://www.php.net/downloads.php)  
- *Node.js* (Minimal Versi 20.18.1)  
  [Download Node.js](https://nodejs.org/en/download/prebuilt-installer)  
- *Laragon* (untuk environment development)  
  [Download Laragon](https://laragon.org/download/)

## Langkah-Langkah Instalasi

1. *Download Semua Komponen yang Dibutuhkan*  
   - Download dan instal Composer, lalu cek apakah sudah terpasang dengan benar dengan menjalankan perintah:  
     bash
     composer -v
     
   - Download PHP dan Node.js sesuai versi prasyarat.  
   - Pindahkan file PHP dan Node.js yang diunduh ke folder masing-masing didalam folder laragon: 
     Kemudian, *extract all* masing-masing file di foldernya.  
   - Setelah di-extract all, buka Laragon, klik kanan pada ikon di taskbar, pilih *PHP*, lalu ubah ke versi PHP terbaru yang telah di download kemudian lakukan hal yang sama pada Node.js
   - Lalu buka terminal Laragon dan cek versi PHP dengan menjalankan:  
     bash
     php -v
     
   - Bersihkan layar terminal:  
     bash
     clear
     
   - Kemudian cek kembali versi Node.js dengan menjalankan:  
     bash
     node -v
     
     Pastikan versi yang tampil sesuai dengan yang sudah Anda download.  

2. *Buat Proyek Laravel Baru*  
   - Buka terminal di Laragon, lalu perintahhkan:  
     bash
     laravel new nama-project
     
   - Jika muncul 1. Would you like to install a starter kit? Ketik “None”
   - 2. Which testing framework do you prefer? Ketik “0” 
   - Kemudian tunggu hingga proses selesai.
   - Ketika muncul "Which database will you application use?" dapat disesuaikan menggunakan database susuai keinginan.
   - Setelah muncul "Default database update. Would you like to run the default database migration? (yes/no)" kalian dapat mengetikkan yes
   - Lalu tunggu kembali prosesnya hingga selesai.
3. *Konfigurasi Environment Laravel*

   - Ketika muncul "INFO Application redy in [nama-project]. You can start local development using :" Lakukan saja perintah nya sesuai dengan yang di intruksikan (pastikan pada [cd nama-project] namanya harus sesuai dengan nama project yang telah dibuat, perintah tersebut untuk masuk ke folder project. Kemudian ikuti perintah selanjutnya.
   - Jika sudah menjalankan 2 perintah tersebut, sekatang perintahkan :
     bash
     code .
     
     - untuk diarahkan menuju Visual Studio Code
