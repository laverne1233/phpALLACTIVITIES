<?php
    $date = "01/21/2002 <br>";
    $birthday = substr($date, 3,2);

    if($birthday % 2 ==0){
        echo $date;
        echo "is even";
    }else{
        echo $date;
        echo "is odd";
    }

?>