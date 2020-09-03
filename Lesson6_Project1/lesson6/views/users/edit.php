<?php 
	require './views/users/process.php';

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
	    	Cập nhật thành viên
	    	<a href="index.php?module=user" style="float: right">
	    		Quay lại
	    	</a>
        </div>
        
    	<form action="index.php?module=user&action=edit&id=<?= $_GET['id'] ?? ''?>" method="post" enctype="multipart/form-data">
			<?php require_once './views/users/form.php'; ?>
			<div class="form-check form-check-flat form-check-primary text-center">
			<button type="submit" name="btn-save" class="btn btn-primary mr-2">Lưu lại</button>
			<a class="btn btn-light" href="index.php?module=user">Hủy bỏ</a>
			</div>
	    </form>
</div>