<?php

$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
 
$value = "April";
 
$key = array_search($value, $months);
 
if ($key !== false) {
    unset($months[$key]);
}
 
print_r($months);
?>