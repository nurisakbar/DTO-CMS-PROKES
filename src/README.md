## Simple FAQ CMS
CMS Simple FAQ DTO

## Cara Melakukan Instalasi
1. git clone https://github.com/nurisakbar/dtofaq.git
2. cd dtofaq dan ketik composer install
3. cp .env.example .env
4. php artisan key:generate
5. sesuaikan settingan koneksi database pada file .env dan jalankan perintah php artisan migrate --seed
6. php artisan storage:link

## account login
login sebagai admin :<br>
email : DTOadmin2001!@gmail.com<br>
password : DTOadmin2001!<br>
Url : http://localhost:8000/login
