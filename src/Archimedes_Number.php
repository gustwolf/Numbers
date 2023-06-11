<?php
namespace Electro\Numbers;
/* смотреть https://en.wikipedia.org/wiki/Archimedes_number 
Число Архимеда (Ar)
1 из 2 формул
*/

use Electro\Numbers\Constants as Constants;

class Archimedes_Number implements NumberInterface
{
    /* плотность среды, кг/м3 */
    protected $ro_l;
    /* плотность тела */
    protected $ro;
    /* динамическая вязкость среды Па*с*/
    protected $eta;
    /* характерный линейный размер тела, м*/
    protected $L;

    
    public function __construct($ro_l, $ro, $eta, $L) {
        $this->ro_l = $ro_l;
        $this->ro = $ro;
        $this->eta = $eta;
        $this->L = $L;
    }
    
    public function calc()
    {
        return ( Constants::g * pow($this->L, 3) * $this->ro_l * ($this->ro - $this->ro_l) )/( pow($this->eta, 2) );
    }
}