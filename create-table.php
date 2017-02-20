<?php

$create = "CREATE TABLE todolist (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
description VARCHAR(500) NOT NULL,
)";

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec($create);

?>