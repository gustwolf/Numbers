<?php
namespace Electro\Numbers;

/* смотреть https://en.wikipedia.org/wiki/Euler_number_(physics)
Число Эйлера (Eu)
*/
class Euler_Number implements NumberInterface
{
    /* плотность */
    protected $ro;
    /* перепад давления, расходуемый на преодоление гидравлического сопротивления */
    protected $delta_p;
    /* скорость */
    protected $v;

    /*

    */
    public function __construct($ro, $delta_p, $v) 
    {
        $this->ro = $ro;
        $this->delta_p = $delta_p;
        $this->v = $v;
    }
    
    public function calc()
    {
        return ($this->delta_p)/($this->ro * $this->v);
    }
}