<?php
require '../vendor/autoload.php';

use Electro\Numbers\Euler_Number as Eu;
$Eu = new Eu(1,2,3);
echo $Eu->calc();