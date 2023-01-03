<?php
require_once('vendor/autoload.php');

use Isaque\Calculadora\Calculator;

$calculator = new Calculator();

echo $calculator->basicOperation(100, NULL, 'multiplication');
?>