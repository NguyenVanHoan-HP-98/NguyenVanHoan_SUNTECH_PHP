
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
				<th>Giới tính</th>
				<th>Chức năng</th>
			</tr>
		</thead>
		<tbody>
			<?php
					$conn = mysqli_connect("localhost","root","","phpclass15");
					$sql = "SELECT id,fullname,email,phone,age FROM users";
					$query = mysqli_query($conn,$sql);
					$users = [];

					while($row = mysqli_fetch_object($query))
					{
						array_push($users, $row);
					}
					foreach($users as $user )
					{
						echo '<tr>';
						echo '<td> Avatar </td>';
						echo '<td>' .$user -> fullname. '</td>';
						echo '<td>' .$user -> email. '</td>';
						echo '<td>' .$user -> phone. '</td>';
						echo '<td>' .$user -> age. '</td>';	
						echo '<td>
							<a href ="index.php?module=user&action=detail&id='.$user->id.'">Chi tiết </a> |
							<a href = # >Sửa </a> |
							<a href = # >Xóa </a> 
						</td>';
						echo '<tr>';

					}
			?>
		</tbody>
	</table>
</div>