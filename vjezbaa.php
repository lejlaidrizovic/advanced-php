<?php
#postavljanjecookia
#$name="firstname" ;
#$value= "John" ;
#setcookie($name, $value, time() + (60 * 60 * 24 *366)) ;



#brisanje cookia
#setcookie($name, $value, time() - 300) ;

#editovanje cookia

#setcookie($name, "Jane", time() + (60 * 60 * 24 * 366)) ;

#ispis cookia
#var_dump($_COOKIE) ;

if(isset ($_COOKIE['firstname']) && !empty($_COOKIE['firstname'])) {
    echo $_COOKIE['firstname'] ;
}
# error supressor operator (@)
#@$ime= $_COOKIE['ime'] ;

?>
