<?php

class Person
{
	private $notice = 'Ghi Đè Dữ Liệu ';

	public function getMessage()
	{
		echo $this->notice . __METHOD__;
	}
}

class Student extends Person
{
	private $notice = 'Thông báo từ Student ';

	public function getMessage()
	{
		parent::getMessage();
		echo '<br/>' . $this->notice . __METHOD__;
	}
}

$student = new Student;

$student->getMessage();
