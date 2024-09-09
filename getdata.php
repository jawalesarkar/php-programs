<?php

include("connection.php");

$id=$_GET["id"];

$query="SELECT * FROM myform";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);
if($total>0)
{
        $result['fname'];
        echo $result;
        while($result=mysqli_fetch_assoc($data))
        {
                   echo "<pre>";
                   $store=$result['ID'];
                   print_r($store.' = ['.$result['fname'].$result['lname'].$result['email'].$result['pass'].$result['phone'].'] ');
        // for($i=0;$i<$total;$i++)
        // {
        //     print_r($result['ID'].' ');
        // }
           echo "</pre>";
        }
  }
 

?>

