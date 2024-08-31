<?php

  $no=134;
  $sum=0;
  while($no>0)
  {
     $rem=$no%10;
     $sum=$sum+$rem;
     $no=(int)($no/10);
  }
  echo " Sum of digits is = $sum";
?>