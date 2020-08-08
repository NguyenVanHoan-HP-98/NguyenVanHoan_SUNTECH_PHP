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
	if ($fullname && $email && $phone && $address && $password) {
		$student = [
					'fullname' => $fullname,
					'email'    => $email,
					'phone'    => $phone,
					'address'  => $address,
					'password' => $password,
				];


		if(!empty($_FILES['avata']['name']))
		{
			$ext =max(explode('.',$_FILES['avata']['name']));
			$ten = explode('.',$_FILES['avata']['name'])[0].".".$ext;
			move_uploaded_file($_FILES['avata']['tmp_name'],"./views/uploads/users/{$ten}");
			$student['avata'] = $ten;
		}

		if(isset($_GET['id']))
		{
			if(!isset($student['avata']))
			{
				$student['avata'] = $_SESSION['users'][$_GET['id']]['avata'] ?? null;
			}
			$_SESSION['users'][$_GET['id']] = $student;
		}
		else{
			$_SESSION['users'][] = $student;
		}
	
		header('location:index.php?module=user');
	}	
}