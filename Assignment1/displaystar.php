<?php  
   echo "enter the vaule to print stars =  ";
    $x = trim(fgets(STDIN));


   if ($x > "0" && $x <= "5"){
   

      for($i=0;$i<=$x;$i++){  
        

          for($j=1;$j<=$i;$j++){  
  

             echo " * ";  

        }  
             echo "\n";  
      }  
         
        }
  else {
     
       echo "Please enter the value Greterthan 0 or less than 5";

  }

?> 