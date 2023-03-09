<?php 
   $host = 'localhost';
   $login = 'root';
   $pass = '';
   $data = 'gestion_ecole';
   try {
    $pdo =new PDO("mysql:host=$host;dbname=$data", $login, '');
    //echo'connexion reussie ';
 } catch (\Throwable $e) {
    echo'Echec de la connexion'.$e->getMessage();
}
?>