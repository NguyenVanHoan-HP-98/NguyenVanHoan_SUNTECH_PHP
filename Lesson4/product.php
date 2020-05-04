<?php
   $products = [];
   for($i=0;$i<1000;$i++)
   {
       array_push($products, [
           'id'   => $i,
           'name'  =>'Product name is '. $i,
           'price' =>number_format(rand(1,5000000)),
       ]);
   }
?>