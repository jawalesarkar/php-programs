<?php 
    try{
        $servername="localhost";
        $username ="root";
        $pass="root";
        $dbname="mydb";
        
        $conn=mysqli_connect($servername,$username,$pass,$dbname);

        if($conn)
        {
        //    echo "connection is successfully";
        }
        else{
            echo "Failed";
        }
    }
    catch(Exception $e){
        print_r($e);die;
    }

?>