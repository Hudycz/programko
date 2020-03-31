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
 
?>;

