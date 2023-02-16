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
    public function executeOperations($i, $j, $case)
    {
       switch($case){
        case "a": 
               echo ($i+$j);
               break;
        case "b": 
                echo ($i*$j);
                break;
        case "c": 
                echo ($i/$j);
                break;
        case "d": 
                 echo ($i-$j);
                break;

       }
    }
    
}
  $firstValue = readline("Please enter i value");
  $secondValue = readline("Please enter j value");
 $oparation = readline("Please enter a-Addition,b-multiplication,c-division,d-substraction");
 

$obj = new Main();
$obj->executeOperations($firstValue,$secondValue,$oparation);
return("Main");
?>