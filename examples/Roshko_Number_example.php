<?php
require '../vendor/autoload.php';
  
$Rk = new Electro\Numbers\Roshko_Number(1,2,3);
echo $Rk->calc();