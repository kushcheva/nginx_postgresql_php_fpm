# nginx_postgresql_php_fpm

Start:
sudo docker-compose up -d


Additional:
Go to the db conteiner:
docker exec -it db /bin/bash

psql -U vasya postgres

postgres=# \l
                                             List of databases
   Name    | Owner | Encoding |  Collate   |   Ctype    | ICU Locale | Locale Provider | Access privileges 
-----------+-------+----------+------------+------------+------------+-----------------+-------------------
 postgres  | vasya | UTF8     | en_US.utf8 | en_US.utf8 |            | libc            | 
 template0 | vasya | UTF8     | en_US.utf8 | en_US.utf8 |            | libc            | =c/vasya         +
           |       |          |            |            |            |                 | vasya=CTc/vasya
 template1 | vasya | UTF8     | en_US.utf8 | en_US.utf8 |            | libc            | =c/vasya         +
           |       |          |            |            |            |                 | vasya=CTc/vasya
 vasya     | vasya | UTF8     | en_US.utf8 | en_US.utf8 |            | libc            | 
(4 rows)


Go to the db conteiner and install addition plugins:
docker exec -it php /bin/bash
apt-get -qq update && apt-get -y install libpq-dev 

docker-php-ext-install pgsql


Lets start script to check our connectoin to bd:

root@e4a1b04bd204:/var/www/html# php connection.php 
<!DOCTYPE html>

<html>

<body>

Connection attempt succeeded.
</body>

</html>
You can run script on http://localhost/test.php or http://localhost/connection.php
