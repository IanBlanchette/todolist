<?php
include_once('database-connect.php');
$sql=$dbo->prepare("DROP TABLE  todolist ");

if($sql->execute()){
echo " Table deleted ";
}else{
print_r($sql->errorInfo()); 
}
?>