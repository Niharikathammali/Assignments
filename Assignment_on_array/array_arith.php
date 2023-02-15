<?php
class operations {
  public function add(...$args) {
    $sum = 0;
    for ($i = 0; $i < count($args); $i++) {
      $sum += $args[$i];
    }
    return $sum;
  }
  public function multiply(...$args) {
    $product = 1;
    for ($i = 0; $i < count($args); $i++) {
      $product *= $args[$i];
    }
    return $product;
  }
  public function division(...$args) {
    $quotient = $args[0];
    for ($i = 1; $i < count($args); $i++) {
      $quotient /= $args[$i];
    }
    return $quotient;
  }
  public function subtraction(...$args) {
    $difference = $args[0];
    for ($i = 1; $i < count($args); $i++) {
      $difference -= $args[$i];
    }
    return $difference;
  }
}
class operationsExecute {
  public function __construct() {
    $this->operations = new operations();
  }
  public function execute() {
    echo $this->operations->add(1, 2, 3, 4, 5);
    echo $this->operations->multiply(1, 2, 3, 4, 5);
    echo $this->operations->division(1, 2, 3, 4, 5);
    echo $this->operations->subtraction(1, 2, 3, 4, 5);
  }
}
$operationsExecuteObj = new operationsExecute();
$operationsExecuteObj->execute();
?>