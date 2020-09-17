<?php

class stringHudak {
    
    static public function substrHudak($stringKterýmNahrazuji, $stringKterýNahrazuji) {
        return substr($stringKterýmNahrazuji, $stringKterýNahrazuji);
    }


    static public function substr__replaceHudak($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit) {
        return substr_replace($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit);
    }

    static public function strtrHudak($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji) {
        return strtr($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji);
    }

    static public function strtoupperHudak($velkéPísmeno) {
        return strtoupper($velkéPísmeno);
    }

    static public function strtolowerHudak($maléPísmeno) {
        return strtolower($maléPísmeno);
    }

    static public function strrposHudak($odkudhledam, $cohledam) {
        return strrpos($odkudhledam, $cohledam);
    }

    static public function strriposHudak($odkudhledam, $presnecohledam) {
        return strripos($odkudhledam, $presnecohledam);
    }

    static public function strposHudak($odkudhledam, $cohledam) {
        return strpos($odkudhledam, $cohledam);
    }

    static public function strlenHudak($délkaŘetězce) {
        return strlen($délkaŘetězce);
    }

    static public function strchrHudak($odkudhledam, $cohledam) {
        return strchr($odkudhledam, $cohledam);
    }

    static public function str_replaceHudak($Samohlásky, $Rozmezí, $veVětě) {
        return str_replace($Samohlásky, $Rozmezí, $veVětě);
    }

    static public function md5Hudak($Zpráva) {
        return md5($Zpráva);
    }

    static public function implodeHudak($Co, $Kam) {
        return implode($Co, $Kam);
    }

    static public function explodeHudak($hranice, $Věta2) {
        return explode($hranice, $Věta2);
    }

    static public function addcslashesHudak($vtomhleretezci, $rozmezi) {
        return addcslashes($vtomhleretezci, $rozmezi);
    }

    static public function addslashHudak($Věta2) {
        return addslashes($Věta2);
    }

    static public function trimPHudak($odsud, $vynechKusŘetězce) {
        return trim($odsud, $vynechKusŘetězce);
    }

    static public function ucfirstHudak($Věta) {
        return ucfirst($Věta);
    }

    static public function ucwordsHudak($Věta) {
        return ucwords($Věta);
    }

}

$stringKterýmNahrazuji = "kockopes";
$stringKterýNahrazuji = 2;
$stringKterýmNahrazuji1 = "pes";
$stringKterýNahrazuji1 = "kocka";
$začátečníBit = 0;
$Věta = "kocka mi snedla susenku";
$slovoKterýNahrazuji = "Kocka";
$slovoKterýmNahrazuji = "Opice";
$velkéPísmeno = "abcdefghijklmnopqrstuvwxyz";
$maléPísmeno = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$odkudhledam = "fs56jhggj7OTGZVd";
$cohledam = "j7O";
$presnecohledam = "ggj7OTG";
$délkaŘetězce = "Cego jsem tu";
$Samohlásky = array('a', 'e', 'i', 'o', 'u', 'y');
$Rozmezí = "";
$veVětě = "Mam rad rizek";
$Zpráva = "spenat";
$co = "_";
$kam = array('pes', 'kocka', 'medved');
$hranice = '""';
$Věta2 = "pes kocka medved";
$vtomhleretezci = "Mam rad rizek";
$rozmezi = 'A..z';
$odsud = "\b\bMam rad rizek\b\b";
$vynechKusŘetězce = "\b";

var_dump(stringHudak::substrHudak($stringKterýmNahrazuji, $stringKterýNahrazuji));
var_dump(stringHudak::substr__replaceHudak($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit));
var_dump(stringHudak::strtrHudak($Věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji));
var_dump(stringHudak::strtoupperHudak($velkéPísmeno));
var_dump(stringHudak::strtolowerHudak($maléPísmeno));
var_dump(stringHudak::strrposHudak($odkudhledam, $cohledam));
var_dump(stringHudak::strriposHudak($odkudhledam, $presnecohledam));
var_dump(stringHudak::strposHudak($odkudhledam, $cohledam));
var_dump(stringHudak::strlenHudak($délkaŘetězce));
var_dump(stringHudak::strchrHudak($odkudhledam, $cohledam));
var_dump(stringHudak::str_replaceHudak($Samohlásky, $Rozmezí, $veVětě));
var_dump(stringHudak::md5Hudak($Zpráva));
var_dump(stringHudak::implodeHudak($co, $kam));
var_dump(stringHudak::explodeHudak($hranice, $Věta2));
var_dump(stringHudak::addcslashesHudak($vtomhleretezci, $rozmezi));
var_dump(stringHudak::addslashHudak($Věta2));
var_dump(stringHudak::trimPHudak($odsud, $vynechKusŘetězce));
var_dump(stringHudak::ucfirstHudak($Věta));
var_dump(stringHudak::ucwordsHudak($Věta));
?>;