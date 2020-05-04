<h2>Production detail</h2>
<?php
require_once 'product.php';

if(isset($_GET['id']))
{
    foreach($products as $product){
        if($product['id'] == $_GET['id'])
        {
            $productDetail = $product;
            break;
        }
    }
    echo "<p> ID là :". $productDetail['id']."</p>";
    echo "<p> Tên sản phẩm là :". $productDetail['name']."</p>";
    echo "<p> Giá sản phẩm là :". $productDetail['price']."</p>";
}
else{
    echo "Chua có id";
}



?>