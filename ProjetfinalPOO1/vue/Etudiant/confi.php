
<?php

// Informations d'identification
define('DB_SERVER', 'mysql-projetfinalpoo1.alwaysdata.net');
define('DB_USERNAME', '316086_adama');
define('DB_PASSWORD', 'biggloo@7112A');
define('DB_NAME', 'projetfinalpoo1_adama');
 
// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
session_start();
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}