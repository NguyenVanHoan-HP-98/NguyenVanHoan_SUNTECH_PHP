<?php


if (isset($_POST['btn-save'])) {
	// Khởi tạo các giá trị của input có trên form
	$fullname = $_POST['fullname'] ?? '';
	$email    = $_POST['email'] ?? '';
	$phone	  = $_POST['phone'] ?? '';
	$address  = $_POST['address'] ?? '';
	$password = $_POST['password'] ?? '';

	// Kiểm tra dữ liệu của họ và tên
	if (!$fullname) {
		$errorFullname = 'Vui lòng nhập họ và tên';
	} else if (strlen(trim($fullname)) < 2) {
		$errorFullname = 'Họ và tên quá ngắn. Phải lơn hơn 2 kí tự';
	}

	// Kiểm tra dữ liệu của email
	if (!$email) {
		$errorEmail = 'Vui lòng nhập email';
	}

	// Sau khi nhập đúng và đủ thông tin trên form -> Thực hiện lưu thông tin sinh viên
	if ($fullname && $email && $phone && $address ) {
		$student = [
					'fullname' => $fullname,
					'email'    => $email,
					'phone'    => $phone,
					'address'  => $address,					
				];


		if(!empty($_FILES['avata']['name']))
		{
			$ext =max(explode('.',$_FILES['avata']['name']));
			$ten = explode('.',$_FILES['avata']['name'])[0].".".$ext;
			move_uploaded_file($_FILES['avata']['tmp_name'],"./views/uploads/users/{$ten}");
			$pathAnh = $ten;
		}
		// thực hiện sửa 
		if(isset($_GET['id']))
		{
			if(!isset($student['avata']))
			{
				$student['avata'] = null ; //$_SESSION['users'][$_GET['id']]['avata'] ?? null;
			}
			$conn = mysqli_connect("localhost","root","","phpclass15");
			$sql = "UPDATE users SET fullname ='".$fullname."',email = '".$email."',phone = '".$phone."', address = '".$address."' 
			WHERE id ='".$_GET['id']."' ";
			mysqli_query($conn,$sql);
		}
		// thực hiện thêm
		else{
			$conn = mysqli_connect("localhost","root","","phpclass15");
			$sql ="INSERT INTO `users`(`fullname`, `email`, `password`, `phone`, `age`, `address`, `gender`, `publish`, `avata`)
			VALUES ('".$fullname."','".$email."','".$password."','".$phone."','22','".$address."','22','1','".$pathAnh."')"; 		
			mysqli_query($conn,$sql);
			//die ($sql);
		}
	
		header('location:index.php?module=user');
	}	
}