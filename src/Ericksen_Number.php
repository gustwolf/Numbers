<?php
namespace Electro\Numbers;

/* смотреть https://en.wikipedia.org/wiki/Ericksen_number
Число Эриксена (Er)
*/
class Ericksen_Number implements NumberInterface
{
    /* вязкость */
    protected $mu;
    /* скорость потока*/
    protected $v;
    /* характерная длина */
    protected $L;
    /* коэффициент Франка */
    protected $K;
    /*

    */
    public function __construct($mu, $v, $L, $K) 
    {
        $this->mu = $mu;
        $this->v = $v;
        $this->L = $L;
        $this->K = $K;
    }
    
    public function calc()
    {
        return ($this->mu * $this->v * $this->L)/($this->K);
    }
}