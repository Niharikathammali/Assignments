<?php
class Operations {
    public function add($array)
    {
        $sum = 0;
        foreach ($array as $value)
        {
            $sum += $value;
        }
        return $sum;
    }
    public function multiply($array)
    {
        $product = 1;
        foreach ($array as $value)
        {
            $product *= $value;
        }
        return $product;
    }
    public function division($array)
    {
        $quotient = 0;
        $firstValue = true;
        foreach ($array as $value){
            if($firstValue == true)
            {
                $quotient = $value;
                $firstValue = false;
                continue;
            }
            $quotient /= $value;
        }
        return $quotient;
    }
    public function subtraction($array)
    {
        $difference = 0;
        $firstValue = true;
        foreach ($array as $value)
        {
            if($firstValue == true)
            {
                $difference = $value;
                $firstValue = false;
                continue;
            }
            $difference -= $value;
        }
        return $difference;
    }
}

class Main {
    public function executeOperations()
    {
        $array = [10,20,30,40,50];
        $operation = new Operations();
        echo "Addition : ".$operation->add($array)."\n";
        echo "Multiplication : ".$operation->multiply($array)."\n";
        echo "Division : ".$operation->division($array)."\n";
        echo "Subtraction : ".$operation->subtraction($array)."\n";
    }
}

$obj = new Main();
$obj->executeOperations();
?>