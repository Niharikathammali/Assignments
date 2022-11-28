<?php
     $date = readline('Enter a Date: ');
    
     $newDate = date('y*m*d',strtotime ( '+10 days' , strtotime ($date) ));
          
         echo "After 10 days date is   ", $newDate;
    
     
     $newDate = date('y*m*d',strtotime ( '-1 year' , strtotime ($date) ));
         
        echo " \nLast year for the given date was   ", $newDate;

?>
