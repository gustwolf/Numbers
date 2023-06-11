<?php
require '../vendor/autoload.php';
use Electro\Numbers\Archimedes_Number as Ar;
$Ar = new Ar(1,2,3,4);
echo $Ar->calc();