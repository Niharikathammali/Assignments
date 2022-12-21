<?php
     $date = readline('Enter a Date: ');
    if (preg_match("/^(20[0-9]{2})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
    
     $newDate = date('y*m*d',strtotime ( '+10 days' , strtotime ($date) ));
          
         echo "After 10 days date is   ", $newDate;
    
     
     $newDate = date('y*m*d',strtotime ( '-1 year' , strtotime ($date) ));
         
        echo " \nLast year for the given date was   ", $newDate;
         }

 

else {


    return false;
}

?>
