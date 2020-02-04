<?php

if($_FILES['file']['size'] <= 0) {
    echo "<p style='color: red'> Pogresna velicina fajla  </p> " ;

}
 else if($_FILES['file']['type'] !=='image/jpeg'  || $_FILES['file']['type'] !=='image/png') {
     echo "<p style='color: red'> Pogresan tip  fajla  </p> " ;
 }
else{
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']) ;
}



?>