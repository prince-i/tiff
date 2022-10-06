<?php
$server = 'localhost';
$username = 'root';
$password = '';
try{
    $conn = new PDO("mysql:host=$server;dbname=vde_formset",$username,$password);
}catch(PDOException $e){
    echo "NO CONNECTION".$e->getMessage();
}

?>