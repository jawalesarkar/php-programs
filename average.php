<?php
$marathi=98;
$english=99;
$hindi=99;
$sience=98;
$urdu=98;
$history=99;
$geography=99;

$total=$marathi+$english+$hindi+$sience+$history+$geography;
$ave=$total/7;
// echo " total is $total";
// echo " average  is $ave";
 if($ave>80)
{
    echo "ou have grade grade A";
}
else if($ave>70)
{
    echo " you have grade B";
}
else if($ave>60)
{
    echo "ou have grade grade C";
}
else if($ave>50)
{
    echo "ou have grade grade D";
}
 else  
{
    echo " sorry yar your fail"  ;
}


?>