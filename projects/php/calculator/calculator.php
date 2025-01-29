<?php
    class Calculator {
        private $sum;
        private $result;
        public function __construct() {
            // Constructor function
        }
        public function add($num1, $num2) {
            $this->sum = $num1 + $num2;
            // return this.sum
            return $this ->sum;
        }
        public function subtract($num1, $num2) {
            $this->sum = $num1 - $num2;
            return $this ->sum;
        }
    }
    // const calculator = new Calculator()
?>