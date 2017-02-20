<?php
include_once('database-connect.php'); // database connection 
$sql=$db->prepare("DROP TABLE  newtodolist ");

if($sql->execute()){
echo " Table deleted ";
}else{
print_r($sql->errorInfo()); 
}
?>