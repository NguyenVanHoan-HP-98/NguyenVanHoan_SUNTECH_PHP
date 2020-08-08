<?php 
	require './views/users/process.php';
?>

<div class="card">
    <div class="card-body">
	    <div class="card-title">
	    	Cập nhật thành viên
	    	<a href="index.php?module=user" style="float: right">
	    		Quay lại
	    	</a>
        </div>
        
    	<form action="index.php?module=user&action=edit&id=<?= $_GET['id'] ?? ''?>" method="post" enctype="multipart/form-data">
	        <?php require_once './views/users/form.php'; ?>
	    </form>
</div>