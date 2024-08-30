<?php 
include("connection.php");

$id=$_GET["id"];

$query= "DELETE FROM myform where id='$id'";

$data=mysqli_query($conn,$query);

if($data)
{
    echo "records are deleted";
}
else
{
    echo "not deleted";
}


?>