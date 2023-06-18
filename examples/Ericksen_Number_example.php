<?php
require '../vendor/autoload.php';
use Electro\Numbers\Ericksen_Number as Er;
$Er = new Er(1,2,3,4);
echo $Er->calc();