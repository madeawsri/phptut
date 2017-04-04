<?php
/**
* Parses and verifies the doc comments for file.
*
* PHP version 5.6
*
* @category  PHP
* @package   PHPTUT
* @author    Teerapuch Kassakul <teerapuch@hotmail.com>
* @copyright 2016 PHPTUT
* @license   http://opensource.org/licenses/mit-license.php MIT License
* @link      http://teerapuch.com
*/
require 'connect.php';
// Set SQl statment
$sql = 'UPDATE customer_tbl SET
        first_name = :first_name,
        last_name = :last_name,
        email = :email,
        country = :country,
        ip_address = :ip_address
        WHERE id = :id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':first_name', $_POST['firstname'], PDO::PARAM_STR);
$stmt->bindParam(':last_name', $_POST['lastname'], PDO::PARAM_STR);
$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindParam(':country', $_POST['country'], PDO::PARAM_STR);
$stmt->bindParam(':ip_address', $_POST['ip'], PDO::PARAM_STR);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();

header('Location: index.php');
exit;
