<?php
namespace Electro\Numbers;

/* смотреть https://en.wikipedia.org/wiki/Ekman_number
Число Экмана (Ek)
Реализована 1 из 2 формул
*/
class Ekman_Number implements NumberInterface
{
    /* параметр (частота) Кориолиса */
    protected $f;
    /* кинематическая вязкость */
    protected $nu;
    /* характеристическая длина */
    protected $L;

    /*

    */
    public function __construct($f, $nu, $L) 
    {
        $this->f = $f;
        $this->nu = $nu;
        $this->L = $L;
    }
    
    public function calc()
    {
        return ($this->nu)/($this->f * pow($this->L,2));
    }
}