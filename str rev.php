<?php

    $name="i am kiran";
    $newArray=explode(' ',$name);
    foreach($newArray as $value)
    {
        
        
        for($i=strlen($value)-1;$i>=0;$i--)
        {
           echo $value[$i];

           
        }
    }
    
?>