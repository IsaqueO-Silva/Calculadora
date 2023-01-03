<?php

namespace Isaque\Calculadora;

class Calculator {

    private $result = '';

    public function basicOperation($numberOne = 1, $numberTwo = 1, $operation = 'sum'): string {
        if(
            (!is_numeric($numberOne)) ||
            (!is_numeric($numberTwo))
        ) {
            return json_encode('Invalid numbers!');
        }
        else {
            switch($operation) {
                case 'sum':
                    $this->result = $numberOne + $numberTwo;
                break;
                case 'subtraction':
                    $this->result = $numberOne - $numberTwo;
                break;
                case 'multiplication':
                    $this->result = $numberOne * $numberTwo;
                break;
                case 'division':
                    $this->result = $numberOne / $numberTwo;
                break;
            }

            return json_encode($this->result);
        }
    }
}
?>