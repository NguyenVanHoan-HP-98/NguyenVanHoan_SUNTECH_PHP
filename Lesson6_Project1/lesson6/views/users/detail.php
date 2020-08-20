<?php
    if(!empty($_GET['id']))
    {
        $conn = mysqli_connect("localhost","root","","phpclass15");
        $sql = "SELECT *FROM users WHERE id =".$_GET['id'];
        $user = mysqli_fetch_assoc(mysqli_query($conn,$sql));
        //echo ''.$sql;
    }

?>
<div class="card">
    <div class="card-body">
	    <div class="card-title">
	    	Thông tin chi tiết
	    	<a href="index.php?module=user" style="float: right">
	    		Quay lại
	    	</a>
        </div>
        <?php if(!empty($user)) :?>
    	<form action="index.php?module=user&action=edit&id=<?= $_GET['id'] ?? ''?>" method="post" enctype="multipart/form-data">
	        <?php require_once './views/users/form.php'; ?>
        </form>
        <?php else : ?>
            <p>Khong tim thayh du lieu</p>
        <?php endif ; ?>
</div>