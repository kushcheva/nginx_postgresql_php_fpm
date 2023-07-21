<?php
    $connect_data = "host=127.0.0.1 port=5432 dbname=database user=postgres password=123456";
    $db_connect = pg_connect($connect_data);
    
    if (!$db_connect) {
        die("Connection error: " . pg_result_error());
    }
    echo "Connection to db successfully.";
    
    pg_close($connect_data);
    
?>
