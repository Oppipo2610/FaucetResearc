# FaucetResearc
For research

## Git remote
Copy link [Address](https://github.com/Oppipo2610/FaucetResearc.git), dan masukkan perintah `git clone <link>`

```
git clone https://github.com/Oppipo2610/FaucetResearc.git

```
masuk ke folder git yang telah di Clone

```
cd [folder_clone]
```
Lakukan pengeditan / perubahan sesuai perubahan yang ada dan lakukun upload file.

```
~$ git init

~$ git add .

~$ git commit -m "Update"

~$ git remote add origin https://github.com/Oppipo2610/FaucetResearc.git

~$ git push
```

Setelah mengetikan `git push`, terlebih dahulu akan memasukkan Username dan password, Username gunakan Username bukan Email, passwod yang direkomendasikan menggunakan Git Token

## Code Folder

Setiap folder berisi modul, digunakan untuk menjalankan perintah sederhana. Setiap modul harus di jalankan setiap `New Session`.

## Mirror File

Hal ini bisa terjadi di lakukan ketika terjadi update pada data git, maka yang harus dilakukan ada melakukan cloning lagi.
Langkah yang harus dilakukan

```
~$ rm -rf *

~$ git checkout master

~$ cd ..

~$ rm -rf [folder_clone]

~$ git clone [link_clone]

```
