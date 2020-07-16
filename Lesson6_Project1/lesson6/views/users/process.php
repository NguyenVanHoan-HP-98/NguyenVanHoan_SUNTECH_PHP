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

		$_SESSION['users'][] = $student;
		
		header('location:index.php?module=user');
	}
}