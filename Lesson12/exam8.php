<?php

class Student
{
	private $name;

	public function __construct()
	{
		echo '<br/>Đã chạy vào phương thức Construct'; // __METHOD__
	}

	public function setName($value)
	{
		$this->name = $value;
	}

	public function getName()
	{
		return '<br/>' .  $this->name;
	}

	public function __destruct()
	{
		echo '<br/>Đã chạy vào phương thức destruct'; // __METHOD__
	}
}

$student = new Student;
$student->setName('Nguyễn Sinh Hùng');
echo $student->getName();