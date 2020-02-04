<?php
$teams= array (
    "sarajevo" => " Ovo je tim Sarajeva ." ,
    "zeljeznicar" => " Ovo je tim Zeljeznicara." ,
    "velez" => "ovo je tim veleza." ;
    
)

 if(isset($_GET['team']) && !empty($_GET['team'])) {
     $team= $_GET['team'] ;
 
     if(array_key_exists($team,$teams)) {
         echo"<p> Opis tima: " . $teams[$team] . "</p>" ;

     } else{
         foreach($teams as $team) {
             echo "<p> Opis tima: " .$team . "</p>" ;
         }
     }

echo "<p> Opis tima: "  . $teams[$team] . "</p>" ;
 } else if (isset($_GET['team']) && $_GET['team'] =='all' ) {
     foreach($teams as $team) {
         echo "<p> Opis tima: " .$team . "</p>" ;

     }
 } else{
     echo "<p> Niste proslijedili valjan parametan. nazalost. </p>" ;
 }
 



?>

