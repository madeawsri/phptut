<?php
try {
    // connect to database
    $db = new PDO('mysql:host=localhost; dbname=zendtut; charset=utf8','root','');
    // sql statment
    $select =  $db->query('SELECT * FROM customer_tbl');
    $customer = $select->fetchAll();
    $countrySQL =  $db->query('SELECT DISTINCT id,country_name FROM country_tbl');
    $country = $countrySQL->fetchAll();
} catch (Exception $e) {
    echo "Can not connect to database";
    throw new Exception($e);
}
?>
