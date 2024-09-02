<?php 

for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=5;$j++)
    {
        echo " *";
    }
    echo "<br>";
}

?>

 
    <?php 
    echo " <br> <br>";
    for($i=1;$i<=10;$i++)
    {
         for($j=1;$j<=20;$j++)
         {
             if(( $i==1) || ( $i==10) || ($j==1) || ($j==20)) 
             {
                 echo" *";
             }
             else
             {
                 echo "&nbsp&nbsp&nbsp";
             }
         }
         printf(" <br>");
        }

   
    ?>

 