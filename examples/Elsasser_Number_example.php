<?php
require '../vendor/autoload.php';
use Electro\Numbers\Elsasser_Number as El;
$El = new El(1,2,3,4);
echo $El->calc();