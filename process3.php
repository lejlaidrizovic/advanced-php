<?php

if($_FILES['file']['size'] <= 0) {
    echo "<p style='color: red'> Pogresna velicina fajla  </p> " ;

}
 else if($_FILES['file']['type'] !=='image/jpeg'  && $_FILES['file']['type'] !=='image/png') {
     echo "<p style='color: red'> Pogresan tip  fajla  </p> " ;
 }
 else if ($_FILES['file']['size'] > 10000000) {
    echo "<p style='color: red'> prevelik fajl  </p> " ;
 }
else if(file_exists($_FILES['file']['name'])){
    echo "<p style='color: red'> fajl vec postoji </p> " ;
}
 
else{
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']) ;
}



?>