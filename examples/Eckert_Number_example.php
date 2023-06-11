<?php
require '../vendor/autoload.php';
  
$Ec = new Electro\Numbers\Eckert_Number(1,2,3);
echo $Ec->calc();