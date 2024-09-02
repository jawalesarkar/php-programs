<?php

//          check a number prime or not

$num=97;
$count=0;
for($i=1;$i<=$num;$i++)
{
    if($num%$i==0)
    {
        $count ++;    
    }
}
if($count==2)
{
    echo " its prime number ";
}
else
{
    echo " not prime";
}
   
?>

 <?php

    //      prime numbers in range

// echo "<br> <br>";
// $num=100;                     
// $count=0;
// $flag=0;
// for($i=2;$i<=$num;$i++)
// {
//     $flag=1;
//         for( $j=2;$j<=$i/2;$j++)
//         {
//             if($i%$j==0)
//             {
                
//                 $flag=0;
//                 break;
//             }
//         }
//         if($flag==1)
//         {
//             echo " $i";
//         }
// }
 
   
 ?>