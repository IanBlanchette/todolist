<?php
include_once('database-connect.php');
$create = "CREATE TABLE newtodolist (
id INT AUTO_INCREMENT PRIMARY KEY,
description VARCHAR(500) NOT NULL)";

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec($create);

?>
