<?php
try {
    $servername="localhost" ;
    $username="root" ;
    $password="" ;
    $connection= new PDO("mysql:host=$servername;dbname=users;port=3307",$username,$password) ;
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
/* select data 1
    $sql= $connection->query("SELECT * FROM users") ;
    while($row = $sql -> fetch(PDO::FETCH_ASSOC)) {
        echo "<p>" . $row['name' ]. "" . $row['lastname'] . "" . $row['nickname'] . "</p>" ;
    }

*/
/*select data 2
  $sql = $connection->query("SELECT * FROM users")->fetchAll() ;
  foreach($sql as $row) {
      echo"<p>" . $row['name'] . "</p>" ;

  }
*/
/* brisanje data
$sql = "DELETE FROM users WHERE users.id = '213' " ;
$connection->exec($sql) ;
*/

$sql = "UPDATE users SET nickname = 'Batman' WHERE users.id = '214' " ;
$connection->exec($sql) ;




} catch(PDOException $e) {
      echo $e->getMessage() ;
}






?>
