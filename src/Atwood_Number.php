<?php
namespace Electro\Numbers;
/* смотреть https://en.wikipedia.org/wiki/Atwood_number 
текущая версия 0.0.1*/
class Atwood_Number implements NumberInterface
{
    protected $ro1;
    protected $ro2;

    /*
    $ro1 =int|float density of heavier fluid
    $ro2 =int|float density of lighter fluid
    */
    public function __construct( $ro1,  $ro2) {
        $this->ro1 = $ro1;
        $this->ro2 = $ro2;
    }
    
    public function calc()
    {
        return ($this->ro1 - $this->ro2)/($this->ro1 + $this->ro2);
    }
}