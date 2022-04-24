<?php
require 'environment.php';

if(ENVIRONMENT == 'desenvolvimento'){
    define("BASE_URL", "http://localhost/sistema_diego/");
    $config['dbname'] = 'sistema_diego';
    $config['dbhost'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "http://localhost/sistema_diego/");
    $config['dbname'] = 'sistema_diego';
    $config['dbhost'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;

try{
    $db = new PDO ("mysql:dbname=".$config['dbname'].";host=".$config['dbhost'],$config['dbuser'],$config['dbpass']);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>