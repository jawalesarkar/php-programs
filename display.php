<?php 
include("connection.php");

$query="SELECT * FROM myform";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);
 
    if($total!=0)
    {
        // echo "table has records";
        ?> 
<style>
    a{
        text-decoration: none;
       
    }
    .btn{
        background-color: green;
        color: white;
    }
 
</style>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th >Operations</th>
                
            </tr>
       
       <?php
       
       while($result=mysqli_fetch_assoc($data))
       {
        
        echo "  <tr>
                    <td> ". $result["ID"]."</td>
                    <td> ". $result["fname"]."</td>
                    <td> ". $result["lname"]."</td>
                    <td> ". $result["email"]."</td>
                    <td> ". $result["phone"]."</td>
                        
                    <td><a href='update_form.php?id=$result[ID]'><input type='submit' value='update' class='btn'></a>

                     <a href='delete.php?id=$result[ID]'><input type='submit' value='delete' class='btn'></a><td>

                </tr>
            ";
        }
    }
    else
    {
        echo "records not found";
    }

?>
 </table>
