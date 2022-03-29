<?php
function solution($A, $k){
   for($i = 0; $i < $k; $i++)
   {
    $length = sizeof($A);          
    //Stores the last element of the array    
    $temp = $A[$length-1];            
    for($j = $length-1; $j > 0; $j--)
    {    
        //Shift element of array by one    
        $A[$j] = $A[$j-1];    
    }    
    //Last element of the array will be added to the start of the array.    
    $A[0] = $temp;    
    }

}
  $A = [3, 8, 9, 7, 6];
  $K = 3;
solution($A, $K);