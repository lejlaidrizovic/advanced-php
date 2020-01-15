<?php
interface iVrata {
    public function openDoor($side) ;
    public function closeDoor($side) ;
    public function fixDoor($side) ;
}
interface iMotor{
    public function startEngine() ;
    public function shutdownEngine() ;
    public function fixEngine() ;
}
abstract class PrevoznoSredstvo {
    public $volan="" ;
    public $tockovi="" ;
    public $kocnica="" ;

    public abstract function upali() ;
    public abstract function ugasi() ;
    public abstract function kreni() ;
    public abstract function stani() ;
    public abstract function vozi () ;

    public function openDoor($side) {}
    public function closeDoor($side) {}
    public function fixDoor($side) {}
        
    public function startEngine() {}
    public function  shutdownEngine() {}
    public function fixEngine() {}
        }

class Automobil extends PrevoznoSredstvo {
    public function upali() {
        $this->startEngine() ;
}
 public function ugasi() {
     $this->shutdownEngine() ;
 }
}


final class Volvo  extends Automobil {

}

$xc60=new Volvo() ;


?>
