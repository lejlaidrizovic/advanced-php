<?php

try{
$servername="localhost" ;
$username="root" ;
$password="" ;
$connection= new PDO("mysql:host=$servername;dbname=users;port=3307",$username,$password) ;

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
/*
$sql="INSERT INTO users(id,name,lastname,nickname) VALUES (213,'lejla','idrizovic','admin')" ;
$connection->beginTransaction() ;
$connection->exec($sql) ;
$connection->commit() ;
*/


$name="Lejla" ;
$lastname="Idrizović" ;
$nickname="Admin" ;
$sql= $connection->prepare("INSERT INTO users (name,lastname,nickname) VALUES (?,?,?)") ;
$sql->execute([$name,$lastname,$nickname]) ;

echo "Izvršeno" ;
}catch(PDOException $e) {
    #$connection->rollback() ;
    echo $e->getMessage() ;
}
?>