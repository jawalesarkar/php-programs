<?php
        // without thrid variable swapping
//  $num1=5;
//  $num2=10;
 
//  echo " before swapping numbers num1=$num1  and num2= $num2 <br>";
//  $num1+=$num2;
//  $num2=$num1-$num2;
//  $num1-=$num2;
 
//  echo " after swapping numbers are num1 =$num1 and num2 = $num2";





    // with third variable swapping 

    
    $num1=20;
    $num2=30;
    $store;

    echo "before swaping numbers are num1 =$num1  and  num2=$num2 <br> ";


    $store=$num1;
    $num1=$num2;
    $num2=$store;

    echo " after swapping numbers are num1 = $num1 and num2 = $num2"

  

?>

