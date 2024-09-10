<?php 
for(  $i=1;$i<=5;$i++)
    {
        for( $j=1;$j<=5;$j++)
        {
            if($i>=$j)
            {                                   //  *
                echo(" * ");                    //  * *
            }                                   //  * * *
            else                                //  * * * *
            {                                   //  * * * * *
                echo("  ");
            }
        }
        echo(" <br>");
    }
?>

<?php 

echo "<br> <br> <br>";
for(  $i=5;$i>=1;$i--)
    {
        for( $j=1;$j<=$i;$j++)                  // * * * * *
        {                                       // * * * *
                                                // * * *
                echo(" * ");                    // * *
                                                // *
           
        }
        echo(" <br>");
    }
?>

 
 
<?php 
echo "<br> <br> <br>";
for ($i=1;$i<=5;$i++)
{
    for( $j=1;$j<$i;$j++)               //  * * * * *
    {                                   //    * * * *
        echo "&nbsp&nbsp&nbsp";         //      * * *
    }                                   //        * *
    for( $k=$i;$k<=5;$k++)              //          *
    {
        echo " *";
    }
    echo "<br>";
}
?>

<?php 
echo "<br> <br> <br>";
 for($i = 5; $i >= 1; $i--)
 {
      for($j=1;$j<= ($i-1); $j++)
      {                                         //          *
            echo "&nbsp&nbsp&nbsp";             //        * *
      }                                         //      * * *
      for($k=$i;$k<=5;$k++)                     //    * * * *
      {                                         //  * * * * *
          echo " *";
      }
     echo "<br>";
 }

 
 ?>


<?php 
 echo "<br> <br> <br>";

 for(  $i = 5; $i >= 1; $i--)
  {                                          
       for(  $j=1;$j<= ($i-1); $j++)        //           *
       {                                    //         * * * 
             echo ("&nbsp&nbsp&nbsp");      //       * * * * *        
       }                                    //     * * * * * * *
       for(  $k=$i;$k<=5;$k++)              //   * * * * * * * * *
       {
           echo(" *");
       }
       for(  $j=4;$j>=$i;$j--)
       {
           echo(" *");
       }
       echo(" <br>");
  }
?>


<?php 
 
 
 
  echo "<br> <br> <br>";
 for($i=1;$i<=7;$i++)
 {
     for($j=1;$j<=5;$j++)
     {                                      //  * * * * * * * * *
       if($j>=$i)                           //    * * * * * * *
       {                                    //      * * * * *
             echo (" *");                   //        * * * 
       }                                    //          *
       else                                 
       {                                    
             echo("&nbsp&nbsp&nbsp");
       }
     }
     for($k=4;$k>=$i;$k--)
       {
             echo(" *");
       }
     echo(" <br>");
 }
?>
<?php

$num=5;
for($i=$num-1;$i>=0;$i--)
{
    for($j=0;$j<=$i;$j++)
    {
        echo " * ";
    }
    for($k=$num-1;$k<=$num-$i;$k++);
    {
        echo "&nbsp&nbsp ";


    }
    for($s=$i;$s>=0;$s--)
    {
        echo " * ";
    }
    echo " <br>";
}
?>

 