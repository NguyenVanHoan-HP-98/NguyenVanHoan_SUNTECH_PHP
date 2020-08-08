<div class="card">
    <div class="card-body">
    <div class="card-title">
    	Danh sách sinh viên
    	
    	<a href="index.php?module=user&action=create" style="float: right">
    		Thêm mới
    	</a>
    </div>

    <table id="recent-purchases-listing" class="table">
		<thead>
			<tr>
				<th>Ảnh đại diện</th>
			    <th>Họ và tên</th>
			    <th>Email</th>
			    <th>Điện thoại</th>
			    <th>Địa chỉ</th>
			    <th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			<?php if (!empty($_SESSION['users'])): 
				$users = $_SESSION['users'];
				foreach ($users as $key => $user): ?>
				<tr>
					<td><img src="./views/uploads/users/<?php echo $user['avata']?>" alt=""></td>
				    <td><?= $user['fullname']; ?></td>
				    <td><?= $user['email']; ?></td>
				    <td><?= $user['phone']; ?></td>
				    <td><?= $user['address']; ?></td>
				    <td>
				    	<a href="index.php?module=user&action=edit&id=<?=$key ?>">Sửa</a>
				    	<a onclick="return confirm('Bạn có thực sự muốn xóa')" href="index.php?module=user&action=delete&id=<?=$key ?>">Xóa</a>
				    </td>
				</tr>
			<?php endforeach; endif; ?>
		</tbody>
	</table>
</div>