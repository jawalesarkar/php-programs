<?php
include("connection.php");

$id= $_GET['id'];

$query="SELECT * FROM myform where ID='$id'";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);
// print_r();die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my form</title>
    <style>
        .container {
            border: 1px solid black;
            width: 30%;
            display: block;
        }
        .lab {
            line-height: 40px;

        }
    </style>

</head>

<body>
        <form action="#" method="POST">
            <h2>Update Form</h2>
            <div class="container">
                <label for="fname" class="lab">First Name</label>
                <input type="text" value=" <?php echo $result['fname'];?>"  name="fname"><br>
                <label for="lname" class="lab">Last Name</label>
                <input type="text" value=" <?php echo $result['lname'];?>"  name="lname"><br>
                <label for="mail" class="lab">Email</label>
                <input type="email" value=" <?php echo $result['email'];?>"  name="email"><br>
                <label for="pas" class="lab">Password</label>
                <input type="password" value=" <?php echo $result['pass'];?>"  name="password"><br>
                <label for="phone" class="lab">Phone Number</label>
                <input type="phone" value=" <?php echo $result['phone']; ?>"  name="phone"><br>
                <input type="submit" name="update" value="Update Form">
               
            </div>

        </form>
   
</body>

</html>
<?php 
if($_POST['update'])
{
   $fname= $_POST['fname'];
   $lname= $_POST['lname'];
   $email=$_POST['email'];
   $password =$_POST['password'];
   $phone= $_POST['phone'];

//   $query= "INSERT INTO myform values ('$fname','$lname','$email','$password','$phone')";     

    $query= "UPDATE myform SET fname='$fname',lname='$lname',email='$email',pass='$password',phone='$phone'  WHERE ID='$id'" ;

    $data=mysqli_query($conn,$query);

  if($data)
  {
    echo "  <script> alert('records updated')</script>";

    ?>
    <meta http-equiv="refresh" content="1;url=http://localhost/phppractice/display.php"> 

  <?php
  }
  
  else
  {
    echo " failed";
  }
 
}
 
?>