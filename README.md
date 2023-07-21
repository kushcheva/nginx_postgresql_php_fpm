# nginx_postgresql_php_fpm

sudo docker-compose up -d

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

docker exec -it php /bin/bash
apt-get -qq update && apt-get -y install libpq-dev 

docker-php-ext-install pgsql

root@e4a1b04bd204:/var/www/html# php connection.php 
<!DOCTYPE html>

<html>

<body>

Connection attempt succeeded.
</body>

</html>
