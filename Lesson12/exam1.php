<?php

class Student
{
	protected $name = 'Nguyễn Văn A';

	protected $email = 'aaaa@gmail.com';

	public function getName()
	{
		return $this->name . ' at ' . $this->getTime();
	}

	public function getEmail()
	{
		return $this->email;
	}

	protected function getTime()
	{
		return date('Y-m-d h:s', time());
	}
}

$objStudent1 = new Student;

echo $objStudent1->getName();

echo '<br/>';

echo $objStudent1->getEmail();