<?php
namespace Electro\Numbers;

/* смотреть https://en.wikipedia.org/wiki/Deborah_number
Число Деборы(De)
*/
class Deborah_Number implements NumberInterface
{
    /* характерное время релаксации материала */
    protected $tc;
    /* характерное время наблюдения */
    protected $tp;
    
    /*

    */
    public function __construct($tc,$tp) 
    {
        $this->tc = $tc;
        $this->tp = $tp;
    }
    
    public function calc()
    {
        return $this->tc / $this->tp;
    }
}