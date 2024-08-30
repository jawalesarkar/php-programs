<?php
include("connection.php");
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
            align-items: center;
        }
        .lab {
            line-height: 40px;
        }
    </style>

</head>

<body>
        <form action="#" method="POST">
            <h2>Resister Form</h2>
            <div class="container">
                <label for="fname" class="lab">First Name</label>
                <input type="text" name="fname"><br>
                <label for="lname" class="lab">Last Name</label>
                <input type="text" name="lname"><br>
                <label for="mail" class="lab">Email</label>
                <input type="email" name="email"><br>
                <label for="pas" class="lab">Password</label>
                <input type="password" name="password"><br>
                <label for="phone" class="lab">Phone Number</label>
                <input type="number" name="phone"><br>
                <button type="submit" name="resister">resister</button>
            </div>
        </form>
</body>

</html>
<?php 
if(isset($_POST['resister']))
{
   $fname= $_POST['fname'];
   $lname= $_POST['lname'];
   $email=$_POST['email'];  
   $password =$_POST['password'];
   $phone= $_POST['phone'];

  $query= "INSERT INTO myform (fname,lname,email,pass,phone) values ('$fname','$lname','$email','$password','$phone')";
  $data=mysqli_query($conn,$query);

  if($data)
  {
    echo " data is inserted into database";
  }
  else
  {
    echo " failed";
  }
}
 
?>