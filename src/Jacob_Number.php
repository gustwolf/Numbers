<?php
namespace Electro\Numbers;

/* смотреть https://en.wikipedia.org/wiki/ 
„исло якоба (Ja)
*/
class Jacob_Number implements NumberInterface
{
    /* удельна€ теплоемкость при посто€нном давлении */
    protected $c_p;
    /* изменение температуры */
    protected $delta_t;
    /* плотность первой жидкости или газа */
    protected $ro1;
    /* плотность второй жидкости или газа */
    protected $ro2;
    /* радиус */
    protected $r;
    /*

    */
    public function __construct($c_p, $delta_t, $ro1, $ro2, $r) 
    {
        $this->c_p = $c_p;
        $this->delta_t = $delta_t;
        $this->ro1 = $ro1;
        $this->ro2 = $ro2;
        $this->r = $r;
    }
    
    public function calc()
    {
        return ($this->c_p * $this->delta_t * $this->ro1)/($this->ro2 * $this->r);
    }
}