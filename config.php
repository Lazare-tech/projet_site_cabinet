<?php 
try{
    $bdd= new PDO('mysql:host=localhost;dbname=site_cabinet;','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e){
    die("Error " . $e->getMessage());
}
?>