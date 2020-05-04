<h2>Produc List</h2>
<?php
    require_once 'product.php';

    echo '<ul>';
    foreach($products as $product)
    {
        echo '<li>';
        echo '<h3>'.$product['name'].'</h3>';
        echo '<p>'.$product['price'].'</p>';
        echo '<a href = "product_detail.php?id='.$product['id'].'" >Xem thông tin chi tiết </a>';
        echo '</li>';
    }
    echo '</ul>';
?>
<style>
    ul{
        margin: 0px;
        padding: 0px;
        list-style-type: none;
    }
    li{
        float: left;
        width: 200px;
        height: 220px;
        background: #ccc;
        margin-right: 5px;
        margin-bottom: 5px;
    }
</style>