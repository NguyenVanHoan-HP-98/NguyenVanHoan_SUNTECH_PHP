
<div class="card">
    <div class="card-body">
    <div class="card-title">
		Danh sách sinh viên
		<a href="./views/users/export.php" style="float: right ; margin-left: 20px; ">
    		CSV
    	</a>
    	
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
					$limit = 2;
					$start = isset($_GET['page']) ? ($_GET['page'] - 1) * $limit : 0;
					$sql = "SELECT id,fullname,email,phone,age,avata,(SELECT count(*) FROM users) as totalRecord 
					FROM users LIMIT $start,$limit";
					$query = mysqli_query($conn,$sql);
					$users = [];
					while($row = mysqli_fetch_object($query))
					{
						array_push($users, $row);
					}
					$totalRecord = isset($users[0]) ? $users[0]-> totalRecord : 0;
					$totalPage = ceil($totalRecord/$limit);

					foreach($users as $user )
					{
						$avataName = $user -> avata ? '<img src="./views/uploads/users/'. $user -> avata.'"  width="90px" height="90px">' : '' ;
						echo '<tr>';
						echo '<td>' .$avataName.'</td>';
						echo '<td>' .$user -> fullname. '</td>';
						echo '<td>' .$user -> email. '</td>';
						echo '<td>' .$user -> phone. '</td>';
						echo '<td>' .$user -> age. '</td>';	
						echo '<td>
							<a href ="index.php?module=user&action=detail&id='.$user->id.'">Chi tiết </a> |
							<a href = "index.php?module=user&action=edit&id='.$user->id.'" >Sửa </a> |
							<a onclick = "return confirm (\'Bạn có muốn xóa không\')" 
							 href = "index.php?module=user&action=delete&id='.$user->id.'">Xóa </a> 
						</td>';
						echo '<tr>';
						// coclick kiểm tra thực sự bạn có muốn xóa hay không

					}
			?>
		</tbody>
	</table>
		<?php
			// kiểm tra sự tông tại của $totalPage
			if(isset($totalPage))
			{
				for($i = 1 ; $i <= $totalPage ; $i++)
				echo '<a href = "index.php?module=user&page='.$i.'">'.$i.''.' '.'</a>';
			}
					
		?>
</div>