<?php
namespace Electro\Numbers;

/* �������� https://en.wikipedia.org/wiki/ 
����� ����� (Ja)
*/
class Jacob_Number implements NumberInterface
{
    /* �������� ������������ ��� ���������� �������� */
    protected $c_p;
    /* ��������� ����������� */
    protected $delta_t;
    /* ��������� ������ �������� ��� ���� */
    protected $ro1;
    /* ��������� ������ �������� ��� ���� */
    protected $ro2;
    /* ������ */
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