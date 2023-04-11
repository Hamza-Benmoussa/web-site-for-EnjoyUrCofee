<?php 
 //connexion with mysql
$servername = "localhost";
$dbname = "e_commerce";
$username = "root";
$password = "";
 try{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
 }
 catch(PDOException $exc){
    echo $exc->getMessage();
    echo "bienn1";
    exit();
}
header("location:index.php");
 
?>