<?php
    $s1 =1;
    $s2 = 1;
    $s3 = $s1 + $s2;
    $kq=0;
    echo "$s1 $s2 $s3";
    do{
        $kq = $s3 + $s2;
        if($kq>10000)
        {
        break;
        }
        else{
            
        echo ' '.$kq;
        $s2=$s3;
        $s3 = $kq;
        }
        
    }while($kq<10000);
?>