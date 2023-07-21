<!DOCTYPE html>

<html>

<body>

<?php

$db_handle = pg_connect("host=db dbname=vasya user=vasya password=123456");

if ($db_handle) {

echo 'Connection attempt succeeded.';

} else {

echo 'Connection attempt failed.';

}

pg_close($db_handle);

?>

</body>

</html>


