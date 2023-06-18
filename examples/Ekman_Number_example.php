<?php
require '../vendor/autoload.php';
use Electro\Numbers\Ekman_Number as Ek;
$Ek = new Ek(1,2,3);
echo $Ek->calc();