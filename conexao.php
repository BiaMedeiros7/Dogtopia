<?php
$dbHost = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'projeto_a3'; 

include_once('conexao.php');
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($conexao->connect_errno) {
    echo "erro";
}else{

} echo "foi";
?>