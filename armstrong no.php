<?php

 $num=153;
 $rem=0;
 $sum=0;
 $org=$num;
 while($num != 0)
 {
     $rem=$num%10;
     $sum=$sum+$rem*$rem*$rem;
     $num=(int)($num/10);
 }
//  echo " sum is $sum";die;
 if($org==$sum)
 {
     echo "its armstrong";
 }
 else
 {
     echo "its not";
 }
 
  

?>