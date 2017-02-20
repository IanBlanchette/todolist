<?php
include_once('database-connect.php');
$sql=$db->prepare("DROP TABLE  todolist ");

if($sql->exec()){
echo " Table deleted ";
}else{
print_r($sql->errorInfo()); 
}
?>