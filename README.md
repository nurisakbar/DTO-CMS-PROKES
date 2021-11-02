# DTO-FAQ-CMS
Run With Docker

1 - git clone https://github.com/nurisakbar/DTO-CMS-PROKES.git <br>
2 - cd DTO-CMS-PROKES<br>
3 - cp .env.example .env<br>
4 - cd src && composer install<br>
5 - cp .env.example .env<br>
6 - php artisan key:generate<br>
7 - docker-compose up<br>
8 - exet -it php container && php artisan migrate --seed


Run With PHP Artisan Serve
1 - git clone https://github.com/nurisakbar/DTO-CMS-PROKES.git <br>
2 - cd DTO-CMS-PROKES<br>
3 - cd src && composer install<br>
4 - cp .env.local.example .env<br>
5 - php artisan key:generate<br>
6 - php artisan migrate --seed
7 - php artisan serve


## Login Admin : 

URL : www.host.com/login <br>
Credential :  check Database\Seeder\userSeeder.php
