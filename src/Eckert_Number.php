<?php
namespace Electro\Numbers;

/* смотреть https://en.wikipedia.org/wiki/Eckert_number
Число Эккерта (Ec)
*/
class Eckert_Number implements NumberInterface
{
    /* удельная теплоёмкость при постоянном давлении */
    protected $c_p;
    /* характеристическая разность температур в жидкости */
    protected $delta_T;
    /* скорость */
    protected $v;

    /*

    */
    public function __construct($c_p, $delta_T, $v) 
    {
        $this->c_p = $c_p;
        $this->delta_T = $delta_T;
        $this->v = $v;
    }
    
    public function calc()
    {
        return (pow($this->v,2))/($this->c_p * $this->delta_T);
    }
}