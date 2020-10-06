<?php
 $instance = new Hudák;
class Hudák {//definice class Hudák
    public $car1 = 15; //definice typu funkce
    public $car2 = 4;
    public $car3 = 45;
    public $car4 = 13;
    public $car5 = 24 ;
    protected $car6 = 26;//definice chranene funkce
    protected $car7 = 31; 
    protected $car8 = 36;
    private $car9 = 189;//definice privatni funkce
    private $car10 = 65;

    public function getcar1 () {//definice verejne funkce
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
var_dump ($instance);//vypise hodnoty
$cisla = new Hudák();
$cisla-> getcar1('15');
echo $cisla-> getcar1();//vypise hodnotu getcar1
echo '<br>';
$cisla-> getcar2('4');
echo $cisla-> getcar2();
echo '<br>';
$cisla-> getcar3('45');
echo $cisla-> getcar3();
echo '<br>';
$cisla-> getcar4('13');
echo $cisla-> getcar4();
echo '<br>';
$cisla-> getcar5('24');
echo $cisla-> getcar5();
?>;

