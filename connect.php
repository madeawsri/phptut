<?php
$id = $_GET['id'];
try {
    // connect to database
    $db = new PDO('mysql:host=localhost; dbname=zendtut; charset=utf8','root','');
    // sql statment
    $select =  $db->query('SELECT * FROM customer_tbl LIMIT 100');
    $customer = $select->fetchAll();
    $countrySQL =  $db->query('SELECT DISTINCT id,country_name FROM country_tbl');
    $country = $countrySQL->fetchAll();
    $email =  $db->query("SELECT email FROM customer_tbl WHERE id = $id ");
    $mail = $email->fetchAll();
    /*
    $email =  $db->prepare("SELECT email FROM customer_tbl WHERE id = $id ");
    $email->execute();
    $mail = $email->fetch();
    */

} catch (Exception $e) {
    echo "Can not connect to database";
    throw new Exception($e);
}
?>
