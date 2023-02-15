<?php
  // Define an array of month names
  $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
  
  // Define the value to be deleted
  $delete = "March";
  
  // Use a foreach loop to loop through the array
  foreach ($months as $key => $month) {
    // Check if the current value matches the value to be deleted
    if ($month == $delete) {
      // Use the unset() function to remove the element from the array
      unset($months[$key]);
    }
  }
  
  // Print the resulting array
  print_r($months);
?>
