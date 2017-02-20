<?php
require "database-connect.php"; // database connection 
$sql=$db->prepare("DROP TABLE  todolist ");

if($sql->execute()){
echo " Table deleted ";
}else{
print_r($sql->errorInfo()); 
}
?>