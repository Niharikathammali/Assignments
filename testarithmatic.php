<?php
echo "Enter the first number: ";
$x = trim(fgets(STDIN));
// echo $x;
echo "Enter the second number: ";
$y = trim(fgets(STDIN));
// echo $y;
 $A=$x+$y;
 $B=$x-$y;
 $C=$x*$y;


echo "Adition = $A \n\n";
echo "Substraction = $B \n\n";
echo "Multiplication = $C \n\n";


 try
{
    if ($y == 0) throw new Exception("Divide by Zero exception occurred\n\n");
    $D = $x / $y;
    echo "Division = $D \n\n";
}
catch(Exception $e)
{
    echo "Exception: %s", $e->getMessage();
}
//echo "Division = $D \n\n";
//echo "Modulus = $E \n\n";
?>