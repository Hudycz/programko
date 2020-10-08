<?php
declare (strict_types = 1);
namespace Hudák;
final class UserHudák {
    /** Vrátí zvuk
     * @author Petr Hudák
     * @param string $zvuk
     * @return string
     */
    public function reproduktor(string $zvuk): string {
        $reproduktor_zvuk = $this->ts->reproduktor($zvuk);
        /**
         * komentar
         * nebo viceradkovy
         */
        return $reproduktor_zvuk;
    }
    private $username = 'petko';
    private $password = '1334';
    protected $firstName = 'Petr';
    protected $lastName = 'Hudák';
    protected $phone = 123456789;
    public $street = 'Imrychova 885';
    public $zip = 14300; // psc
    public $invoiceId = 0123574112; // ico
    public $loginCount = 0;
    public $bornDate = 2001;
    public function __construct() {
    }
    /**
     * komentar
     * @param string $username
     */
    function setUsernameHudák(string $username) {
        $this->username = $username;
    }
    /**
     * komentar
     * @param string $password
     */
    function setPasswordHudák(string $password) {
        $this->password = $password;
    }
    /**
     * komentar
     * @return string
     */
    function getStreetHudák(): string {
        return $this->street;
    }
    /**
     * komentar
     * @return int
     */
    function getZipHudák(): int {
        return $this->zip;
    }
    /**
     * komentar
     * @return int
     */
    function getInvoiceIdHudák(): int {
        return $this->invoiceId;
    }
    /**
     * komentar
     * @return int
     */
    function getLoginCountHudák(): int {
        return $this->loginCount;
    }
    /**
     * komentar
     * @return int
     */
    function getBornDateHudák(): int {
        return $this->bornDate;
    }
}
$petko = new UserHudák;
$petko->setUsernameHudák("Petr");
echo $petko->getStreetHudák();
echo $petko->getZipHudák();
echo $petko->getInvoiceIdHudák();
echo $petko->getLoginCountHudák();
echo $petko->getBornDateHudák();

echo var_dump($petko);