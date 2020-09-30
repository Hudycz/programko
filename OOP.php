<?php
 $instance = new Hudák;
class Hudák {
    public $car1 = 15; 
    public $car2 = 4;
    public $car3 = 45;
    public $car4 = 13;
    public $car5 = 24 ;
    protected $car6 = 26;
    protected $car7 = 31; 
    protected $car8 = 36;
    private $car9 = 189;
    private $car10 = 65;

    public function getcar1 () {
       return $this-> car1;
    }
    public function getcar2 () {
       return $this-> car2;
    }
    public function getcar3 () {
       return $this-> car3;
    }
    public function getcar4 () {
       return $this-> car4;
    }
    public function getcar5 () {
       return $this-> car5;
    }

    private function setcar9 () {
       return $this-> car9; 
    }
    private function setcar10 () {
        return $this-> car10;
    }
    public function _construct () {

    }

} 
var_dump ($instance);
$cisla = new Chyska();
$cisla-> getneco1('15');
echo $cisla-> getneco1();
echo '<br>';
$cisla-> getneco2('4');
echo $cisla-> getneco2();
echo '<br>';
$cisla-> getneco3('45');
echo $cisla-> getneco3();
echo '<br>';
$cisla-> getneco4('13');
echo $cisla-> getneco4();
echo '<br>';
$cisla-> getneco5('24');
echo $cisla-> getneco5();
?>;

