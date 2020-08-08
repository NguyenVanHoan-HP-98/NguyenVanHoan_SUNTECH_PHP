<?php
     if(isset($_GET['id']))

    {
        $user = $_SESSION['users'][$_GET['id']];
    }

?>

<div class="form-group row">
  	<label class="col-sm-2 col-form-label">
  		Họ và tên
  	</label>

    <div class="col-sm-9">
        <input type="text" name="fullname" class="form-control" placeholder="Họ và tên" value="<?= $user['fullname'] ?? $_POST['fullname'] ?? '' ?>">
        <span class="small text-danger"><?= $errorFullname ?? '' ?></span>
    </div>
</div>

<div class="form-group row">
  	<label class="col-sm-2 col-form-label">
  		Địa chỉ email
  	</label>

    <div class="col-sm-9">
        <input type="text" name="email" class="form-control" placeholder="Địa chỉ email" value="<?=$user['email'] ?? $_POST['email'] ?? '' ?>">
        <span class="small text-danger"><?= $errorEmail ?? '' ?></span>
    </div>
</div>

<div class="form-group row">
  	<label class="col-sm-2 col-form-label">
  		Số điện thoại
  	</label>

    <div class="col-sm-9">
        <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" value="<?=$user['phone'] ??  $_POST['phone'] ?? '' ?>">
    </div>
</div>

<div class="form-group row">
  	<label for="exampleInputUsername2" class="col-sm-2 col-form-label">
  		Địa chỉ
  	</label>

    <div class="col-sm-9">
        <input type="text" name="address" class="form-control" placeholder="Họ và tên" value="<?= $user['address'] ??  $_POST['address'] ?? '' ?>">
    </div>
</div>

<div class="form-group row">
  	<label class="col-sm-2 col-form-label">
  		Ảnh đại diện
  	</label>

    <div class="col-sm-9">
        <input type="file" name="avata" class="form-control" >
        <?php if(!empty($user['avata'])) : ?>
            <img src="./views/uploads/users/<?= $user['avata']?>" width="90px" height="90px">
        <?php endif ; ?>
    </div>
</div>

<div class="form-group row">
  	<label class="col-sm-2 col-form-label">
  		Mật khẩu
  	</label>

    <div class="col-sm-9">
        <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
    </div>
</div>

<div class="form-group row">
  	<label class="col-sm-2 col-form-label">
  		Nhập lại mật khẩu
  	</label>

    <div class="col-sm-9">
        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
    </div>
</div>

<div class="form-check form-check-flat form-check-primary text-center">
  	<button type="submit" name="btn-save" class="btn btn-primary mr-2">Lưu lại</button>
	<button class="btn btn-light">Hủy bỏ</button>
</div>