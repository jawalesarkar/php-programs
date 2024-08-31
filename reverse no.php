<?php

 $num=87654;
 $rev=0;
 
 while($num!=0)
 {
     $rem=$num%10;
     $rev=$rev*10+$rem;
     $num=(int) ($num/10);
 }
 echo " here reverse number is $rev";

?>