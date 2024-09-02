<?php 
 
 $fact=1;
 $num=5;
 $sum=0;
 for($i=1;$i<=$num;$i++)
 {
     $fact=$fact*$i;
     $sum=$sum+$fact;
 }
 echo " factorial number is $fact  \n";
 echo " sum of the factorial serial is $sum";
 ?>