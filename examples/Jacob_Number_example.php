<?php
require '../vendor/autoload.php';
use Electro\Numbers\Jacob_Number as Ja;
$Ja = new Ja(1,2,3,4,5);
echo $Ja->calc();