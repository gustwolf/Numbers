<?php
namespace Electro\Numbers;

/* смотреть https://en.wikipedia.org/wiki/Roshko_number
Число Рошко (Rk или Ro)
*/
class Roshko_Number implements NumberInterface
{
    /* частота вихреобразования */
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
        return ($this->f * pow($this->L, 2)) / $this->nu;
    }
}