<?php 
	require './views/users/process.php';
?>

<div class="card">
    <div class="card-body">
	    <div class="card-title">
	    	Thêm mới thành viên
	    	<a href="index.php?module=user" style="float: right">
	    		Quay lại
	    	</a>
	    </div>
	    
    	<form action="index.php?module=user&action=create" method="post" enctype="multipart/form-data" >
	        <?php require_once './views/users/form.php'; ?>
	    </form>
</div>