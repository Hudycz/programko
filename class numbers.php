<?php

class numbers {

    static public function roundHudak($zaokrouhli) {
        return round($zaokrouhli);
    }

    static public function ceilHudak($zaokrouhlinahoru) {
        return ceil($zaokrouhlinahoru);
    }

    static public function floorHudak($zaokrouhlidolu) {
        return floor($zaokrouhlidolu);
    }

    static public function sqrtHudak($druhaodmocnina) {
        return sqrt($druhaodmocnina);
    }

    static public function powHudak($mocnina, $mocnitel) {
        return pow($mocnina, $mocnitel);
    }

    static public function sinHudak($uhel) {
        return sin($uhel);
    }

    static public function cosHudak($uhel) {
        return cos($uhel);
    }

    static public function tanHudak($uhel) {
        return tan($uhel);
    }

    static public function asinHudak($zcislanauhel) {
        return asin($zcislanauhel);
    }

    static public function acosHudak($zcislanauhel) {
        return acos($zcislanauhel);
    }

    static public function atanHudak($zcislanauhel) {
        return atan($zcislanauhel);
    }

    static public function fmodHudak($zaklad, $delitel) {
        return fmod($zaklad, $delitel);
    }

    static public function maxHudak($pole) {
        return max($pole);
    }

    static public function minHudak($pole) {
        return min($pole);
    }

    static public function absHudak($abscislo) {
        return abs($abscislo);
    }

    static public function odecitaniHudak($a, $b) {
        return $a - $b;
    }

    static public function scitaniHudak($a, $b) {
        return $a + $b;
    }

    static public function deleniHudak($a, $b) {
        return $a / $b;
    }

    static public function nasobeniHudak($a, $b) {
        return $a * $b;
    }

    static public function number_formatHudak($formatuje) {
        return number_format($formatuje);
    }

}

$zaokrouhli = 38.83;
$zaokrouhlinahoru = 38.83;
$zaokrouhlidolu = 38.83;
$druhaodmocnina = 16;
$mocnina = 9;
$mocnitel = 3;
$uhel = 90;
$zcislanauhel = 50;
$zaklad = 20;
$delitel = 5;
$pole = array('1', '2', '3', '4', '5', '12', '16', '25', '69');
$abscislo = 57.12;
$a = 8;
$b = 2;
$formatuje = 10;
?>;
