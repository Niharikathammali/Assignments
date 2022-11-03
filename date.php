<?php
$Date = readline('Enter a Date: ');
		

$newDate = date('d-m-Y', strtotime('+10 days'));
  
    echo "After 10 days date is", $newDate;
//$Date = readline('After 10 days date is : ');
$newDate = date('d-m-Y', strtotime('-1 year'));
  
    echo "Last year for the given date was", $newDate;

?>
