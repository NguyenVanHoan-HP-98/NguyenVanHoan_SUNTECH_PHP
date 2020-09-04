<?php

class Student
{
	private $name;
	
	private $email;

	private $phone;

	public function __construct($name, $email, $phone)
	{
		$this->name = $name;
		$this->email = $email;
		$this->phone = $phone;
	}

	public function getInfo()
	{
		$info = 'Tên của bạn là: '. $this->name;
		$info .= '<br/>Email của bạn là: '. $this->email;
		$info .= '<br/>Số điện thoại của bạn là: '. $this->phone;

		return $info;
	}
}

$student = new Student('Nguyễn Đức Anh', 'anhnd@gmail.com', '0934456543');
echo $student->getInfo();
