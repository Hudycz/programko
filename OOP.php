<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Hudak_Petr{

    protected $napeti_Hudak_Petr;
    //nastavení napeti
    public function setNapeti_Hudak_Petr($napeti_Hudak_Petr){
        $this->napeti_Hudak_Petr = $napeti_Hudak_Petr;
    }
    //precteni napeti
    public function getNapeti_Hudak_Petr() {
        return $this-> napeti_Hudak_Petr;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Hudak_Petr extends ustredny_Hudak_Petr{
   public $Napeti_Hudak_Petr= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
interface iustredna_Hudak_Jakub extends ustredny_Hudak_Petr{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Hudak_Petr);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Hudak_Petr::TYPE);
 var_dump ($Napeti_Hudak_Petr);
 
 
 
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
$car1 = new Hudák();
$car1-> getcar1('15');
echo $car1-> getcar1();
echo '<br>';
$car2 = new Hudák();
$car2-> getcar2('4');
echo $car2-> getcar2();
echo '<br>';
$car3 = new Hudák();
$car3-> getcar3('45');
echo $car3-> getcar3();
echo '<br>';
$car4 = new Hudák();
$car4-> getcar4('13');
echo $car4-> getcar4();
echo '<br>';
$car5 = new Hudák();
$car5-> getcar5('24');
echo $car5-> getcar5();
?>;

