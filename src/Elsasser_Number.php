<?php
namespace Electro\Numbers;

/* смотреть https://en.wikipedia.org/wiki/Elsasser_number
Число Элсассера (El)
*/
class Elsasser_Number implements NumberInterface
{
    /* индукция магнитного поля */
    protected $B;
    /* угловая скорость вращения планеты */
    protected $Omega;
    /* плотность */
    protected $ro;
    /* электропроводность */
    protected $sigma;
    /*

    */
    public function __construct($B, $Omega, $ro, $sigma) 
    {
        $this->B = $B;
        $this->Omega = $Omega;
        $this->ro = $ro;
        $this->sigma = $sigma;
    }
    
    public function calc()
    {
        return ($this->sigma * $this->B)/($this->ro * $this->Omega);
    }
}