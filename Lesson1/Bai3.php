<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table1{
            background: #df1f1f;
        }
        .table2{
            background: #08e0f6;
        }
        .fontinnghieng{
            font-style: italic;
        }
        .fontindam{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table border="1" align="center">
<?php                   
                    $tam4 = 1;
                    $tam5 = 2;
                        while($tam4<=10){ 
                            $tam3=''; 
                            for($j = $tam5;$j<=10;$j++)
                            {
                                if($j%2 == 0)
                                {
                                    if($j==4)
                                    {
                                        $kq1= $j*$tam4;
                                        $tam3 .= "<td class='table1 fontinnghieng'> $j x $tam4 = $kq1 </td>";
                                    }
                                    else{
                                        if($j == 8 || $j == 10 )
                                        {
                                            $kq1= $j*$tam4;
                                            $tam3 .= "<td class='table1 fontindam'> $j x $tam4 = $kq1 </td>";

                                        }
                                        else
                                        {
                                            $kq1= $j*$tam4;
                                            $tam3 .= "<td class='table1'> $j x $tam4 = $kq1 </td>";
                                        }
                                    }
                                }
                               else
                               {
                                   if($j>=3 && $j<=5)
                                   {
                                        $kq1= $j*$tam4;
                                        $tam3 .= "<td class=' table2 fontinnghieng'> $j x $tam4 = $kq1 </td>";
                                   }
                                   else{
                                        if($j==9)
                                        {
                                                $kq1= $j*$tam4;
                                                $tam3 .= "<td class='table2 fontindam'> $j x $tam4 = $kq1 </td>";
                                        }
                                        else
                                        {
                                            $kq1= $j*$tam4;
                                            $tam3 .= "<td  class='table2'> $j x $tam4 = $kq1 </td>";
                                        }
                                   }
                                    
                               }
                            }
                            echo "<tr>";
                            echo $tam3;
                            echo "</tr>";
                            $tam4++;
                        }
                        ?>
        </table>
</body>
</html>